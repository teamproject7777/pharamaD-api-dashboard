<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PeriodicalMedicine extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_name',
        'medicine_name',
        'address',
        'phone',
        'time',
        'note',
        'image'
    ];
}
