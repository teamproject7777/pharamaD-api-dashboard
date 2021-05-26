<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PatientResource::collection(
            Patient::simplePaginate($request->input('paginate') ?? 20)
        )->additional([
            'meta' => [
                'success' => true,
                'message' => "patients loaded",
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string',
            'phone_number' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toArray(), 422);
        }

        DB::beginTransaction();
        try {
            $patient = PatientTransformer::toInstance($validator->validate());
            $patient->save();
            DB::commit();
        } catch (Exception $ex) {
            Log::info($ex->getMessage());
            DB::rollBack();
            return response()->json($ex->getMessage(), 409);
        }

        return (new PatientResource($patient))
            ->additional([
                'meta' => [
                    'success' => true,
                    'message' => "patient created"
                ]
            ]);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        return (new PatientResource($patient))
            ->additional([
                'meta' => [
                    'success' => true,
                    'message' => "patient found"
                ]
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        $validator = Validator::make($request->all(), [  
            'name' => 'sometimes|required|string',  
            'phone_number' => 'sometimes|required|string'
        ]);  
    
        if ($validator->fails()) {  
            return response()->json($validator->errors()->toArray(), 422);  
        }  
    
        DB::beginTransaction();  
        try {  
            $updated_patient = PatientTransformer::toInstance($validator->validate(), $patient);  
            $updated_patient->save();  
            DB::commit();  
        } catch (Exception $ex) {  
            Log::info($ex->getMessage());  
            DB::rollBack();  
            return response()->json($ex->getMessage(), 409);  
        }  
    
        return (new PatientResource($updated_patient))  
            ->additional([  
                'meta' => [  
                    'success' => true,  
                    'message' => "patient updated"  
      ]  
            ]);  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        DB::beginTransaction();  
        try {  
            $patient->delete();  
            $patient->save();  
            DB::commit();  
        } catch (Exception $ex) {  
            Log::info($ex->getMessage());  
            DB::rollBack();  
            return response()->json($ex->getMessage(), 409);  
        }  
    
        return response()->json('patient has been deleted', 204); 
    }
}
