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
 
    //     Schema::create('lguprofile', function (Blueprint $table) {
    //         $table->increments('id');
    //         $table->string('incomeclass',150);
    //         $table->date('dateMonitoring');
    //         $table->string('periodCovered',10);
    //         $table->integer('population');
    //         $table->integer('nutritionalStatus');
    //         $table->integer('landuseClassification');
    //         $table->string('totallandRemarks', 150);
    //         $table->string('sourceRemarks', 150);
    //         $table->string('received', 150);
    //         $table->date('dateReceived');
    //         $table->integer('noPax');
    //         $table->string('remarks', 150);
    //         // $table->date('dateCreated');
    //         // $table->date('dateUpdated');

            
    //         // $table->integer('province_id')->unsigned(); 
    //         // $table->integer('municipal_id')->unsigned(); 
    //         // $table->integer('barangay_id')->unsigned(); 
    //         // $table->foreign('province_id')->references('id')->on('provinces'); 
    //         // $table->foreign('municipal_id')->references('id')->on('municipals');
    //         // $table->foreign('barangay_id')->references('id')->on('barangays'); 
    //         $table->timestamps();
    //     });


    //     Schema::create('lgudemographics', function (Blueprint $table) {
    //         $table->increments('id');
           
    //         $table->integer('totalPopulation');
    //         $table->integer('noHouseholds');
    //         $table->integer('noSitios');
    //         $table->integer('householdssafeWater');
    //         $table->integer('householdssanitaryToilet');
    //         $table->integer('daycareCenter');
    //         $table->integer('publicelemsecondarySchools');
    //         $table->integer('brgyhealthStations');
    //         $table->integer('retailsoutletsStores');
    //         $table->integer('marketstransportterminal');
    //         $table->string('monthersBreastfeeding', 150);
    //         $table->string('terrain', 150);
    //         $table->string('hazards', 150);
    //         // $table->date('dateCreated');
    //         // $table->date('dateUpdated');

    //         $table->integer('lguprofile_id')->unsigned(); 
    //         $table->foreign('lguprofile_id')->references('id')->on('lguprofile'); 
    //         $table->timestamps();
    //     });
    }

    // /**
    //  * Reverse the migrations.
    //  */
    // public function down(): void
    // {
    //     Schema::dropIfExists('lguprofile');
    //     Schema::dropIfExists('lgudemographics');
    // }
};
