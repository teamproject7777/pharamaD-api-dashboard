<?php

namespace App\Http\Controllers;

use App\Http\Resources\EmployeeResource;
use App\Http\Transformers\EmployeeTransformer;
use App\Models\Employee;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  Request  $request
     * @return AnonymousResourceCollection
     */
    public function index(Request $request)
    {
        return EmployeeResource::collection(
            Employee::simplePaginate($request->input('paginate') ?? 15)
        )->additional([
            'meta' => [
                'success' => true,
                'message' => "employees loaded",
            ]
        ]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return EmployeeResource|JsonResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'pay_rate' => 'required|numeric',
            'job_title' => 'required|string',
            'active' => 'required|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toArray(), 422);
        }

        DB::beginTransaction();
        try {
            $employee = EmployeeTransformer::toInstance($validator->validate());
            $employee->save();
            DB::commit();
        } catch (Exception $ex) {
            Log::info($ex->getMessage());
            DB::rollBack();
            return response()->json($ex->getMessage(), 409);
        }

        return (new EmployeeResource($employee))
            ->additional([
                'meta' => [
                    'success' => true,
                    'message' => "employee created"
                ]
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  Employee  $employee
     * @return EmployeeResource
     */
    public function show(Employee $employee)
    {
        return (new EmployeeResource($employee))
            ->additional([
                'meta' => [
                    'success' => true,
                    'message' => "employee found"
                ]
            ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  Employee  $employee
     * @return JsonResponse|EmployeeResource
     */
    public function update(Request $request, Employee $employee)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|string',
            'pay_rate' => 'sometimes|required|numeric',
            'job_title' => 'sometimes|required|string',
            'active' => 'sometimes|required|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toArray(), 422);
        }

        DB::beginTransaction();
        try {
            $updated_employee = EmployeeTransformer::toInstance($validator->validate(), $employee);
            $updated_employee->save();
            DB::commit();
        } catch (Exception $ex) {
            Log::info($ex->getMessage());
            DB::rollBack();
            return response()->json($ex->getMessage(), 409);
        }

        return (new EmployeeResource($updated_employee))
            ->additional([
                'meta' => [
                    'success' => true,
                    'message' => "employee updated"
                ]
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Employee  $employee
     * @return JsonResponse
     */
    public function destroy(Employee $employee)
    {
        DB::beginTransaction();
        try {
            $employee->delete();
            $employee->active = false;
            $employee->save();
            DB::commit();
        } catch (Exception $ex) {
            Log::info($ex->getMessage());
            DB::rollBack();
            return response()->json($ex->getMessage(), 409);
        }

        return response()->json('employee has been deleted', 204);

    }
}
