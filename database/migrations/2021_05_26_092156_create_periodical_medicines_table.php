<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodicalMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodical_medicines', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name')->nullable();
            $table->string('medicine_name')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('time')->nullable();
            $table->string('note')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('periodical_medicines');
    }
}
