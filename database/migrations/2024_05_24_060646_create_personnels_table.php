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
        Schema::create('personnels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_number', 100)->nullable();
            $table->string('lastname', 100);
            $table->string('firstname', 100);
            $table->string('middlename', 100);
            $table->string('suffix', 100);
            $table->string('sex', 100);
            $table->string('age', 100);
            $table->date('birthdate');
            $table->string('educationalbackground',100); 
            $table->string('degreeCourse', 100);
            $table->string('address', 100);
            $table->string('civilstatus', 100)->nullable();
            $table->string('email', 100)->unique(); //refactor
            $table->string('cellphonenumer', 100);
            $table->string('telephonenumber', 100);

            $table->integer('cities_id')->unsigned();
            $table->foreign('cities_id')->references('id')->on('cities');
            
            $table->integer('region_id')->unsigned(); 
            $table->integer('province_id')->unsigned(); 

            $table->foreign('region_id')->references('id')->on('regions'); 
            $table->foreign('province_id')->references('id')->on('provinces'); 

            $table->timestamps();
        });


        Schema::create('naos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nameGovMayor', 100);
            $table->string('typenao', 100);
            $table->string('typedesignation', 100);
            $table->date('datedesignation');
            $table->string('typeappointment', 100);
            $table->string('position', 100);
            $table->string('department', 100);  
              
            $table->integer('personnel_id')->unsigned(); 
            $table->foreign('personnel_id')->references('id')->on('personnels');
            $table->timestamps();
        });


        Schema::create('npcs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nameGovMayor', 100);
            $table->string('typenpc', 100);
            $table->string('typedesignation', 100);
            $table->date('datedesignation');
            $table->string('typeappointment', 100);
            $table->string('position', 100);
            $table->string('department', 100);
            $table->string('dcnpcapmembership', 100);  
            $table->string('dcnpcapposition', 100);  
            $table->string('dcnpcapofficer', 100);  
              
            $table->integer('personnel_id')->unsigned(); 
            $table->foreign('personnel_id')->references('id')->on('personnels');
            $table->timestamps();
        });

        Schema::create('bnss', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Barangay', 100);
            $table->string('statusemployment', 100);
            $table->string('beneficiaryname', 100);
            $table->string('relationship');
            $table->date('periodactivefrom');
            $table->date('periodactiveto');
            $table->date('lastupdate');
            $table->string('bnsstatus', 100);   
              
            $table->integer('personnel_id')->unsigned(); 
            $table->foreign('personnel_id')->references('id')->on('personnels');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personels');
        Schema::dropIfExists('naos');
        Schema::dropIfExists('npcs');
        Schema::dropIfExists('bnss');

    }
};
