<?php

namespace App\Http\Transformers;

use App\Models\Employee;

class EmployeeTransformer
{

    public static function toInstance(array $input, $employee = null)
    {
        if (empty($employee)) {
            $employee = new Employee();
        }

        foreach ($input as $key => $value) {
            switch ($key) {
                case 'name':
                    $employee->name = $value;
                    break;
                case 'pay_rate':
                    $employee->pay_rate = $value;
                    break;
                case 'job_title':
                    $employee->job_title = $value;
                    break;
                case 'active':
                    $employee->active = $value;
                    break;
            }
        }

        return $employee;
    }
}
