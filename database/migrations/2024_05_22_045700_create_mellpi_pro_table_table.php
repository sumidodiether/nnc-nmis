<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
    //     Schema::create('lgu_profile', function (Blueprint $table) {
    //         $table->increments('id');
    //         $table->string('income_class',150);
    //         $table->date('date_monitoring');
    //         $table->string('period_covered',10);
    //         $table->integer('population');
    //         $table->integer('nutritional_status');
    //         $table->integer('land_use_classification');
    //         $table->string('total_land_remarks', 150);
    //         $table->string('source_and_remarks', 150);
    //         $table->string('received', 150);
    //         $table->date('date_received');
    //         $table->integer('no_pax');
    //         $table->string('remarks', 150);
    //         $table->date('date_created');
    //         $table->date('date_updated');
    //         $table->integer('province_id')->unsigned(); 
    //         $table->integer('municipal_id')->unsigned(); 
    //         $table->integer('barangay_id')->unsigned(); 
    //         $table->foreign('province_id')->references('id')->on('provinces'); 
    //         $table->foreign('municipal_id')->references('id')->on('municipals');
    //         $table->foreign('barangay_id')->references('id')->on('barangays'); 
    //         $table->timestamps();
    //     });


    //     Schema::create('lgu_demographics', function (Blueprint $table) {
    //         $table->increments('id');
    //         $table->integer('lgu_profile_id')->unsigned(); 
    //         $table->foreign('lgu_profile_id')->references('id')->on('lgu_profile'); 
    //         $table->integer('total_population');
    //         $table->integer('no_households');
    //         $table->integer('no_sitios');
    //         $table->integer('households_safe_water');
    //         $table->integer('households_sanitary_toilet');
    //         $table->integer('day_care_center');
    //         $table->integer('public_elem_secondary_schools');
    //         $table->integer('brgy_health_stations');
    //         $table->integer('retails_outlets_stores');
    //         $table->integer('markets_transport_terminal');
    //         $table->string('monthers_breastfeeding', 150);
    //         $table->string('terrain', 150);
    //         $table->string('hazards', 150);
    //         $table->date('date_created');
    //         $table->date('date_updated');
    //         $table->timestamps();
    //     });

            // Adding new column
          
            Schema::table('nutrition_services', function (Blueprint $table) {
                $table->double('young_child_feeding_average', 8, 2)->default(0)->nullable();
                $table->double('acute_malnutrition_average', 8, 2)->default(0)->nullable();
                $table->double('national_dietary_average', 8, 2)->default(0)->nullable();
                $table->double('behavioral_change_average', 8, 2)->default(0)->nullable();
                $table->double('micro_supplement_average', 8, 2)->default(0)->nullable();
                $table->double('mandatory_food_average', 8, 2)->default(0)->nullable();
                $table->double('emergencies_program_average', 8, 2)->default(0)->nullable();
                $table->double('prevention_program_average', 8, 2)->default(0)->nullable();
                $table->double('nutri_sensitive_average', 8, 2)->default(0)->nullable();
            });
      


        //     Schema::create('nutrition_services', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->integer('lgu_profile_id')->unsigned(); 
        //     $table->foreign('lgu_profile_id')->references('id')->on('lguprofile'); 
        //     $table->integer('young_child_feeding_rating1');
        //     $table->string('young_child_feeding_remarks1', 255);
        //     $table->integer('young_child_feeding_rating2');
        //     $table->string('young_child_feeding_remarks2', 255);
        //     $table->integer('young_child_feeding_rating3');
        //     $table->string('young_child_feeding_remarks3', 255);
        //     $table->integer('young_child_feeding_average');

        //     $table->integer('acute_malnutrition_rating4');
        //     $table->string('acute_malnutrition_remarks4', 255);
        //     $table->integer('acute_malnutrition_average');

        //     $table->integer('national_dietary_rating5');
        //     $table->string('national_dietary_remarks5', 255);
        //     $table->integer('national_dietary_rating6');
        //     $table->string('national_dietary_remarks6', 255);
        //     $table->integer('national_dietary_rating7');
        //     $table->string('national_dietary_remarks7', 255);
        //     $table->integer('national_dietary_rating8');
        //     $table->string('national_dietary_remarks8', 255);
        //     $table->integer('national_dietary_average');

        //     $table->integer('behavioral_change_rating9');
        //     $table->string('behavioral_change_remarks9', 255);
        //     $table->integer('behavioral_change_rating10');
        //     $table->string('behavioral_change_remarks10', 255);
        //     $table->integer('behavioral_change_average');

        //     $table->integer('micro_supplement_rating11');
        //     $table->string('micro_supplement_remark11', 255);
        //     $table->integer('micro_supplement_rating12');
        //     $table->string('micro_supplement_remark12', 255);
        //     $table->integer('micro_supplement_rating13');
        //     $table->string('micro_supplement_remark13', 255);
        //     $table->integer('micro_supplement_rating14');
        //     $table->string('micro_supplement_remark14', 255);
        //     $table->integer('micro_supplement_rating15');
        //     $table->string('micro_supplement_remark15', 255);
        //     $table->integer('micro_supplement_rating16');
        //     $table->string('micro_supplement_remark16', 255);
        //     $table->integer('micro_supplement_average');

        //     $table->integer('mandatory_food_rating17');
        //     $table->string('mandatory_food_remarks17', 255);
        //     $table->integer('mandatory_food_rating18');
        //     $table->string('mandatory_food_remarks18', 255);
        //     $table->integer('mandatory_food_rating19');
        //     $table->string('mandatory_food_remarks19', 255);
        //     $table->integer('mandatory_food_average');

        //     $table->integer('emergencies_program_rating20');
        //     $table->string('emergencies_program_remarks20', 255);
        //     $table->integer('emergencies_program_average');


        //     $table->integer('prevention_program_rating21');
        //     $table->string('prevention_program_remarks21', 255);
        //     $table->integer('prevention_program_rating22');
        //     $table->string('prevention_program_remarks22', 255);
        //     $table->integer('prevention_program_average');

        //     $table->integer('nutri_sensitive_rating23');
        //     $table->string('nutri_sensitive_remarks23', 255);
        //     $table->integer('nutri_sensitive_rating24');
        //     $table->string('nutri_sensitive_remarks24', 255);
        //     $table->integer('nutri_sensitive_rating25');
        //     $table->string('nutri_sensitive_remarks25', 255);
        //     $table->integer('nutri_sensitive_rating26');
        //     $table->string('nutri_sensitive_remarks26', 255);
        //     $table->integer('nutri_sensitive_rating27');
        //     $table->string('nutri_sensitive_remarks27', 255);
        //     $table->integer('nutri_sensitive_rating28');
        //     $table->string('nutri_sensitive_remarks28', 255);
        //     $table->integer('nutri_sensitive_rating29');
        //     $table->string('nutri_sensitive_remarks29', 255);
        //     $table->integer('nutri_sensitive_rating30');
        //     $table->string('nutri_sensitive_remarks30', 255);
        //     $table->integer('nutri_sensitive_average');

            
        //     $table->timestamps();
        // });


        // Schema::create('changes_ns', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->integer('lgu_profile_id')->unsigned(); 
        //     $table->foreign('lgu_profile_id')->references('id')->on('lguprofile'); 

        //     $table->integer('underweight_child_rating');
        //     $table->string('underweight_child_remarks', 255);
        //     $table->integer('stundent_child_rating');
        //     $table->string('stundent_child_remarks', 255);
        //     $table->integer('wasted_child_rating');
        //     $table->string('wasted_child_remarks', 255);
        //     $table->integer('obese_child_rating');
        //     $table->string('obese_child_remarks', 255);
        //     $table->integer('wasted_school_rating');
        //     $table->string('wasted_school_remarks', 255);
        //     $table->integer('obese_school_rating');
        //     $table->string('obese_school_remarks', 255);
        //     $table->integer('risk_pregnant_rating');
        //     $table->string('risk_pregnant_remarks', 255);
        //     $table->integer('timbang_plus_rating');
        //     $table->string('timbang_plus_remarks', 255);
            
        //     $table->timestamps();
        // });

        // Schema::create('discussion_questions', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->integer('lgu_profile_id')->unsigned(); 
        //     $table->foreign('lgu_profile_id')->references('id')->on('lguprofile'); 

            
        //     $table->string('vision_good_practices_remarks', 255);
        //     $table->string('vision_issues_problems_remarks', 255);
        //     $table->string('vision_local_initiatives_remarks', 255);
        //     $table->string('vision_immediate_actions_remarks', 255);
        //     $table->string('policies_good_practices_remarks', 255);
        //     $table->string('policies_issues_problems_remarks', 255);
        //     $table->string('policies_local_initiatives_remarks', 255);
        //     $table->string('policies_immediate_actions_remarks', 255);
        //     $table->string('governance_good_practices_remarks', 255);
        //     $table->string('governance_issues_problems_remarks', 255);
        //     $table->string('governance_local_initiatives_remarks', 255);
        //     $table->string('governance_immediate_actions_remarks', 255);
        //     $table->string('nutri_good_practices_remarks', 255);
        //     $table->string('nutri_issues_problems_remarks', 255);
        //     $table->string('nuti_local_initiatives_remarks', 255);
        //     $table->string('nutri_immediate_actions_remarks', 255);
        //     $table->string('services_good_practices_remarks', 255);
        //     $table->string('services_issues_problems_remarks', 255);
        //     $table->string('services_local_initiatives_remarks', 255);
        //     $table->string('services_immediate_actions_remarks', 255);
        //     $table->string('changes_good_practices_remarks', 255);
        //     $table->string('changes_issues_problems_remarks', 255);
        //     $table->string('changes_local_initiatives_remarks', 255);
        //     $table->string('changes_immediate_actions_remarks', 255);
            
        //     $table->timestamps();
        // });



        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('lgu_profile');
        // Schema::dropIfExists('lgu_demographics');
        // Schema::dropIfExists('discussion_questions');
        // Schema::dropIfExists('nutrition_services');
        // Schema::dropIfExists('changes_ns');
        Schema::table('nutrition_services', function (Blueprint $table) {
            $table->dropColumn('young_child_feeding_average');
            $table->dropColumn('acute_malnutrition_average');
            $table->dropColumn('national_dietary_average');
            $table->dropColumn('behavioral_change_average');
            $table->dropColumn('micro_supplement_average');
            $table->dropColumn('mandatory_food_average');
            $table->dropColumn('emergencies_program_average');
            $table->dropColumn('prevention_program_average');
            $table->dropColumn('nutri_sensitive_average');
        });
    }
};
