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
        Schema::create('mellpi_pro_lnfps', function (Blueprint $table) {
            $table->id();
            $table->string('barangay');
            $table->string('cityMun');
            $table->string('province');
            $table->date('date_of_monitoring');
            $table->date('periodCoveredyear1');
            $table->date('periodCoveredbyear2');

            $table->integer('totalPopulation');
            $table->integer('noHousehold');
            $table->integer('householdWater');
            $table->integer('householdToilets');
            $table->integer('dayCareCenter');
            $table->integer('elementary');
            $table->integer('secondarySchool');
            $table->integer('healthStations');
            $table->integer('retailOutlets');
            $table->integer('bakeries');
            $table->integer('markets');
            $table->integer('transportTerminals');
            $table->integer('at_risk_pregnantwomen');
            $table->integer('breastfeeding');
            $table->integer('idd_Pregnant');
            $table->integer('idd_lactating');
            $table->string('terrain');
            $table->string('hazzard');
            $table->string('affectedLGU');

            $table->integer('population_estimated_6_11mos');
            $table->integer('population_estimated_6_23mos');
            $table->integer('population_estimated_12_59mos');
            $table->integer('population_estimated_0_59months');
            $table->integer('population_estimated_pregnant');
            $table->integer('population_estimated_lactating');
            $table->integer('population_actual_6_11mons');
            $table->integer('population_actual_6_23mos');
            $table->integer('population_actual_12_59mos');
            $table->integer('population_actual_0_59mos');
            $table->integer('population_actual_pregnant');
            $table->integer('population_actual_lactating');

            //nutritition status of preschool children 1st
            $table->integer('nsps_1_Normal_y1');
            $table->integer('nsps_1_Underweight_y1');
            $table->integer('nsps_1_SeverelyUnderweight_y1');
            $table->integer('nsps_1_Overweight_y1');
            $table->integer('nsps_1_Normal_y2');
            $table->integer('nsps_1_Underweight_y2');
            $table->integer('nsps_1_SeverelyUnderweight_y2');
            $table->integer('nsps_1_Overweight_y2');
            $table->integer('nsps_1_Normal_y3');
            $table->integer('nsps_1_Underweight_y3');
            $table->integer('nsps_1_SeverelyUnderweight_y3');
            $table->integer('nsps_1_Overweight_y3');

            //nutrition status of preschool children 2nd
            $table->integer('nsps_2_Normal_y1');
            $table->integer('nsps_2_Wasted_y1');
            $table->integer('nsps_2_SeverelyWasted_y1');
            $table->integer('nsps_2_Overweight_y1');
            $table->integer('nsps_2_Obese_y1');
            $table->integer('nsps_2_Normal_y2');
            $table->integer('nsps_2_Wasted_y2');
            $table->integer('nsps_2_SeverelyWasted_y2');
            $table->integer('nsps_2_Overweight_y2');
            $table->integer('nsps_2_Obese_y2');
            $table->integer('nsps_2_Normal_y3');
            $table->integer('nsps_2_Wasted_y3');
            $table->integer('nsps_2_SeverelyWasted_y3');
            $table->integer('nsps_2_Overweight_y3');
            $table->integer('nsps_2_Obese_y3');

            //nutrition status of preschool children 3rd
            $table->integer('nsps_3_Normal_y1');
            $table->integer('nsps_3_Stunted_y1');
            $table->integer('nsps_3_SeverelyStunted_y1');
            $table->integer('nsps_3_Tall_y1');
            $table->integer('nsps_3_Normal_y2');
            $table->integer('nsps_3_Stunted_y2');
            $table->integer('nsps_3_SeverelyStunted_y2');
            $table->integer('nsps_3_Tall_y2');
            $table->integer('nsps_3_Normal_y3');
            $table->integer('nsps_3_Stunted_y3');
            $table->integer('nsps_3_SeverelyStunted_y3');
            $table->integer('nsps_3_Tall_y3');

            //Nutrition Status of School Children
            $table->integer('nsscNormal_y1');
            $table->integer('nsscWasted_y1');
            $table->integer('nsscSeverelyWasted_y1');
            $table->integer('nsscOverweight_y1');
            $table->integer('nsscObese_y1');
            $table->integer('nsscNormal_y2');
            $table->integer('nsscWasted_y2');
            $table->integer('nsscSeverelyWasted_y2');
            $table->integer('nsscOverweight_y2');
            $table->integer('nsscObese_y2');
            $table->integer('nsscNormal_y3');
            $table->integer('nsscWasted_y3');
            $table->integer('nsscSeverelyWasted_y3');
            $table->integer('nsscOverweight_y3');
            $table->integer('nsscObese_y3');

            //Nutrition Status of Pregnant Women
            $table->integer('nspwNormal_y1');
            $table->integer('nspwNutritionallyAtRisk_y1');
            $table->integer('nspwOverweight_y1');
            $table->integer('nspwObese_y1');
            $table->integer('nspwNormal_y2');
            $table->integer('nspwNutritionallyAtRisk_y2');
            $table->integer('nspwOverweight_y2');
            $table->integer('nspwObese_y2');
            $table->integer('nspwNormal_y3');
            $table->integer('nspwNutritionallyAtRisk_y3');
            $table->integer('nspwOverweight_y3');
            $table->integer('nspwObese_y3');

            //total No. Barangay Nutrition Scholars
            $table->integer('totalNumBrgyScholar_New');
            $table->integer('totalNumBrgyScholar_Existing');

            //land use classification
            $table->string('landAreaResidential');
           $table->string('remarksResidential'); 

           $table->string('landAreaCommercial');
           $table->string('remarksCommercial'); 

           $table->string('landAreaIndustrial');
           $table->string('remarksIndustrial'); 

           $table->string('landAreaAgricultural');
           $table->string('remarksAgricultural'); 

           $table->string('landAreaFLMLNP');
           $table->string('remarksFLMLNP');
            
            $table->timestamps();
        });

        Schema::create('barangaytracking_lnfp', function (Blueprint $table) {
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mellpi_pro_for_l_n_f_p_s');
    }
};
