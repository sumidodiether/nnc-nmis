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
        Schema::create('nutrition_offices', function (Blueprint $table) {
            $table->id();
            $table->string('geoLevel', 255);
            $table->string('income_class', 255);
            $table->string('nutritionOffice', 255);
            $table->string('separateNutritionBudget', 255);
            $table->integer('separateNutritionBudgetAmount');
            $table->string('underWhatOffice', 255);
            $table->string('underWhatOfficeOther', 255);
            $table->string('pcnao_position', 255);
            $table->string('pcnao_jobTitle', 255);
            $table->string('pcnao_emplStat', 255);
            $table->string('pcnao_othersEmpStat', 255);
            $table->integer('pcnao_salaryGrade');
            $table->string('pcnao_moreThanOne', 255);
            $table->integer('pcnao_moreThanOneNumber');
            $table->string('dcnpc_position', 255);
            $table->string('dcnpc_jobTitle', 255);
            $table->string('dcnpc_emplStat', 255);
            $table->string('dcnpc_othersEmpStat', 255);
            $table->integer('dcnpc_salaryGrade');
            $table->string('dcnpc_moreThanOne');
            $table->integer('dcnpc_moreThanOneNumber');
            $table->integer('numTechSupp');
            $table->integer('numAdminSupp');

            $table->integer('psgccode_id')->unsigned(); 
            $table->foreign('psgccode_id')->references('id')->on('psgcs');

            $table->integer('region_id')->unsigned(); 
            $table->integer('province_id')->unsigned(); 
            $table->integer('municipal_id')->unsigned(); 

            $table->foreign('region_id')->references('id')->on('regions'); 
            $table->foreign('province_id')->references('id')->on('provinces'); 
            $table->foreign('municipal_id')->references('id')->on('municipals');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nutrition_offices');
    }
};
