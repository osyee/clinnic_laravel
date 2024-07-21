<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('medical__conditions', function (Blueprint $table) {
            $table->id();
            $table->string("ConditionName");
            $table->string("Test");
            $table->string("Drugs");

            $table->unsignedBigInteger("Appointment_id");
            $table->foreign("Appointment_id")->references("id")->on("appointments")->onDelete("CASCADE");


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical__conditions');
    }
};
