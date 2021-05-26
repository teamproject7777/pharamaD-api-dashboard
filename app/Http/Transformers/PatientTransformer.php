<?php

namespace App\Http\Transformers;

use App\Models\Patient;

class PatientTransformer
{

    public static function toInstance(array $input, $patient = null)
    {
        if (empty($patient)) {
            $patient = new Patient();
        }

        foreach ($input as $key => $value) {
            switch ($key) {
                case 'name':
                    $patient->name = $value;
                    break;
                case 'phone_number':
                    $patient->phone_number = $value;
                    break;
                
            }
        }

        return $patient;
    }
}
