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
