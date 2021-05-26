<?php

namespace App\Http\Transformers;

use App\Models\PeriodicalMedicine;

class PeriodicalMedicineTransformer
{

    public static function toInstance(array $input, $periodicalMedicine = null)
    {
        if (empty($periodicalMedicine)) {
            $periodicalMedicine = new PeriodicalMedicine();
        }

        foreach ($input as $key => $value) {
            switch ($key) {
                case 'patient_name':
                    $periodicalMedicine->patient_name = $value;
                    break;
                case 'medicine_name':
                    $periodicalMedicine->medicine_name = $value;
                    break;
                case 'address':
                    $periodicalMedicine->address = $value;
                    break;
                case 'phone':
                    $periodicalMedicine->phone = $value;
                    break;
                case 'time':
                    $periodicalMedicine->time = $value;
                    break;
                case 'note':
                    $periodicalMedicine->note = $value;
                    break;
                
            }
        }

        return $periodicalMedicine;
    }
}
