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
        Schema::create('lnfp_form5a', function (Blueprint $table) {
            $table->id();
            $table->string('YearPeriod', 999)->nullable();
            $table->string('namePNAO', 999)->nullable();
            $table->string('address', 999)->nullable();
            $table->string('provOfDeployment', 999)->nullable();
            $table->string('numOfYears_as', 999)->nullable();
            $table->string('position', 999)->nullable();
            $table->string('fulltime', 999)->nullable();
            $table->string('withContProfAct', 999)->nullable();

            $table->string('capDevAct', 999)->nullable();

            $table->string('trainingAttended', 999)->nullable();

            $table->string('birthday', 999)->nullable();
            $table->string('sex', 999)->nullable();
            $table->string('dateOfDesignation', 999)->nullable();

            $table->string('dateOfAppointment', 999)->nullable();

            $table->string('educationAttainment', 999)->nullable();
            $table->string('secondedFromTheOffice', 999)->nullable();

            $table->string('elementsA', 999)->nullable();
            $table->string('performanceA1', 999)->nullable();
            $table->string('performanceA2', 999)->nullable();
            $table->string('performanceA3', 999)->nullable();
            $table->string('performanceA4', 999)->nullable();
            $table->string('performanceA5', 999)->nullable();
            $table->string('documentSourceA', 999)->nullable();

            $table->string('elementsB', 999)->nullable();
            $table->string('performanceB1', 999)->nullable();
            $table->string('performanceB2', 999)->nullable();
            $table->string('performanceB3', 999)->nullable();
            $table->string('performanceB4', 999)->nullable();
            $table->string('performanceB5', 999)->nullable();
            $table->string('documentSourceB', 999)->nullable();

            $table->string('elementsBB', 999)->nullable();
            $table->string('performanceBB1', 999)->nullable();
            $table->string('performanceBB2', 999)->nullable();
            $table->string('performanceBB3', 999)->nullable();
            $table->string('performanceBB4', 999)->nullable();
            $table->string('performanceBB5', 999)->nullable();
            $table->string('documentSourceBB', 999)->nullable();

            $table->string('elementsC', 999)->nullable();
            $table->string('performanceC1', 999)->nullable();
            $table->string('performanceC2', 999)->nullable();
            $table->string('performancec3', 999)->nullable();
            $table->string('performanceC4', 999)->nullable();
            $table->string('performanceC5', 999)->nullable();
            $table->string('documentSourceC', 999)->nullable();

            $table->string('elementsD', 999)->nullable();
            $table->string('performanceD1', 999)->nullable();
            $table->string('performanceD2', 999)->nullable();
            $table->string('performanceD3', 999)->nullable();
            $table->string('performanceD4', 999)->nullable();
            $table->string('performanceD5', 999)->nullable();
            $table->string('documentSourceD', 999)->nullable();

            $table->string('elementsE', 999)->nullable();
            $table->string('performanceE1', 999)->nullable();
            $table->string('performanceE2', 999)->nullable();
            $table->string('performanceE3', 999)->nullable();
            $table->string('performanceE4', 999)->nullable();
            $table->string('performanceE5', 999)->nullable();
            $table->string('documentSourceE', 999)->nullable();

            $table->string('elementsF', 999)->nullable();
            $table->string('performanceF1', 999)->nullable();
            $table->string('performanceF2', 999)->nullable();
            $table->string('performanceF3', 999)->nullable();
            $table->string('performanceF4', 999)->nullable();
            $table->string('performanceF5', 999)->nullable();
            $table->string('documentSourceF', 999)->nullable();

            $table->string('elementsG', 999)->nullable();
            $table->string('performanceG1', 999)->nullable();
            $table->string('performanceG2', 999)->nullable();
            $table->string('performanceG3', 999)->nullable();
            $table->string('performanceG4', 999)->nullable();
            $table->string('performanceG5', 999)->nullable();
            $table->string('documentSourceG', 999)->nullable();

            $table->string('elementsGG', 999)->nullable();
            $table->string('performanceGG1', 999)->nullable();
            $table->string('performanceGG2', 999)->nullable();
            $table->string('performanceGG3', 999)->nullable();
            $table->string('performanceGG4', 999)->nullable();
            $table->string('performanceGG5', 999)->nullable();
            $table->string('documentSourceGG', 999)->nullable();

            $table->string('elementsH', 999)->nullable();
            $table->string('performanceH1', 999)->nullable();
            $table->string('performanceH2', 999)->nullable();
            $table->string('performanceH3', 999)->nullable();
            $table->string('performanceH4', 999)->nullable();
            $table->string('performanceH5', 999)->nullable();
            $table->string('documentSourceH', 999)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lnfp_form5a');
    }
};
