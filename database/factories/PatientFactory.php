<?php

namespace Database\Factories;

use App\Models\patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class patientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
                'name' => $this->faker->name,
                'phone_number' => $this->faker->phoneNumber,
            
        ];
    }
}
