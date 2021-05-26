<?php

namespace App\Http\Controllers;

use App\Models\PeriodicalMedicine;
use Illuminate\Http\Request;

class PeriodicalMedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    

    
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'patient_name' => 'required|string',
            'medicine_name' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'time' => 'required|string',
            'note' => 'required|string',
            // 'image' => ''
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors()->toArray(), 422);
        }

        DB::beginTransaction();
        try {
            $periodicalMedicine = PatientTransformer::toInstance($validator->validate());
            $periodicalMedicine->save();
            DB::commit();
        } catch (Exception $ex) {
            Log::info($ex->getMessage());
            DB::rollBack();
            return response()->json($ex->getMessage(), 409);
        }

        return (new PeriodicalMedicineResource($periodicalMedicine))
            ->additional([
                'meta' => [
                    'success' => true,
                    'message' => "periodical created"
                ]
            ]);
    
    }

    
    public function show(PeriodicalMedicine $periodicalMedicine)
    {
        return (new PeriodicalMedicineResource($periodicalMedicine))
            ->additional([
                'meta' => [
                    'success' => true,
                    'message' => "periodicalMedicine found"
                ]
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PeriodicalMedicine  $periodicalMedicine
     * @return \Illuminate\Http\Response
     */
    public function edit(PeriodicalMedicine $periodicalMedicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PeriodicalMedicine  $periodicalMedicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PeriodicalMedicine $periodicalMedicine)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PeriodicalMedicine  $periodicalMedicine
     * @return \Illuminate\Http\Response
     */
    public function destroy(PeriodicalMedicine $periodicalMedicine)
    {
        //
    }
}
