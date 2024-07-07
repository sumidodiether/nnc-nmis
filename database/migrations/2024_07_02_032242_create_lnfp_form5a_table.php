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
            $table->string('YearPeriod', 999);
            $table->string('namePNAO', 999);
            $table->string('address', 999);
            $table->string('provOfDeployment', 999);
            $table->string('numOfYears_as', 999);
            $table->string('position', 999);
            $table->string('fulltime', 999);
            $table->string('withContProfAct', 999);

            $table->string('capDevAct', 999);

            $table->string('trainingAttended', 999);

            $table->string('birthday', 999);
            $table->string('sex', 999);
            $table->string('dateOfDesignation', 999);

            $table->string('dateOfAppointment', 999);

            $table->string('educationAttainment', 999);
            $table->string('secondedFromTheOffice', 999);

            $table->string('elementsA', 999);
            $table->string('performanceA1', 999);
            $table->string('performanceA2', 999);
            $table->string('performanceA3', 999);
            $table->string('performanceA4', 999);
            $table->string('performanceA5', 999);
            $table->string('documentSourceA', 999);

            $table->string('elementsB', 999);
            $table->string('performanceB1', 999);
            $table->string('performanceB2', 999);
            $table->string('performanceB3', 999);
            $table->string('performanceB4', 999);
            $table->string('performanceB5', 999);
            $table->string('documentSourceB', 999);
            $table->string('performanceBB1', 999);
            $table->string('performanceBB2', 999);
            $table->string('performanceBB3', 999);
            $table->string('performanceBB4', 999);
            $table->string('performanceBB5', 999);
            $table->string('documentSourceBB', 999);

            $table->string('elementsC', 999);
            $table->string('performanceC1', 999);
            $table->string('performanceC2', 999);
            $table->string('performancec3', 999);
            $table->string('performanceC4', 999);
            $table->string('performanceC5', 999);
            $table->string('documentSourceC', 999);

            $table->string('elementsD', 999);
            $table->string('performanceD1', 999);
            $table->string('performanceD2', 999);
            $table->string('performanceD3', 999);
            $table->string('performanceD4', 999);
            $table->string('performanceD5', 999);
            $table->string('documentSourceD', 999);

            $table->string('elementsE', 999);
            $table->string('performanceE1', 999);
            $table->string('performanceE2', 999);
            $table->string('performanceE3', 999);
            $table->string('performanceE4', 999);
            $table->string('performanceE5', 999);
            $table->string('documentSourceE', 999);

            $table->string('elementsF', 999);
            $table->string('performanceF1', 999);
            $table->string('performanceF2', 999);
            $table->string('performanceF3', 999);
            $table->string('performanceF4', 999);
            $table->string('performanceF5', 999);
            $table->string('documentSourceF', 999);

            $table->string('elementsG', 999);
            $table->string('performanceG1', 999);
            $table->string('performanceG2', 999);
            $table->string('performanceG3', 999);
            $table->string('performanceG4', 999);
            $table->string('performanceG5', 999);
            $table->string('documentSourceG', 999);
            $table->string('elementsGG', 999);
            $table->string('performanceGG1', 999);
            $table->string('performanceGG2', 999);
            $table->string('performanceGG3', 999);
            $table->string('performanceGG4', 999);
            $table->string('performanceGG5', 999);

            $table->string('elementsH', 999);
            $table->string('performanceH1', 999);
            $table->string('performanceH2', 999);
            $table->string('performanceH3', 999);
            $table->string('performanceH4', 999);
            $table->string('performanceH5', 999);
            $table->string('documentSourceH', 999);

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
