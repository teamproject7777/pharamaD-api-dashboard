<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PatientTest extends TestCase
{
    use RefreshDatabase, WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_can_create_an_patient() {

        // make an instance of the patient Factory
        // $patient = patient::factory()->make([
        //     'active' => true
        // ]);

        // post the data to the patients store method
        $response = $this->post(route('patients.store'), [
            'name' => $patient->name,
            'phone_number' => $patient->phone_nmber
            
        ]);

        $response->assertSuccessful();

        $this->assertDatabaseHas('patients', [
            'name' => $patient->name,
            'pay_rate' => $patient->phone_nmber
        ]);

    }
}
