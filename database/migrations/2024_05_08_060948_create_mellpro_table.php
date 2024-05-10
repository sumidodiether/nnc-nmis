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
        // Schema::create('mellpro', function (Blueprint $table) {
        //     $table->increments('id'); 
        //     $table->timestamps();
        // });

        Schema::create('regions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('region', 100);
            $table->timestamps();
        }); 

        Schema::create('provinces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('province', 100);
            $table->integer('region_id')->unsigned(); 
            $table->foreign('region_id')->references('id')->on('regions'); 
            $table->timestamps();

        }); 

        Schema::create('municipals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('municipal', 100);
            $table->integer('province_id')->unsigned(); 
            $table->foreign('province_id')->references('id')->on('provinces'); 
            $table->timestamps();

        }); 

        Schema::create('barangays', function (Blueprint $table) {
            $table->increments('id');
            $table->string('barangay', 100);
            $table->integer('municipal_id')->unsigned(); 
            $table->foreign('municipal_id')->references('id')->on('municipals'); 
            $table->timestamps();

        }); 


        // Forms&Rating
        Schema::create('visionmissions' , function (Blueprint $table) {
            $table->increments('id');
            $table->string('1aRating');
            $table->integer('1bRating');
            $table->integer('1cRating');
            $table->string('1aRemarks', 255);
            $table->string('1bRemarks', 255);
            $table->string('1cRemarks', 255);
            $table->integer('region_id')->unsigned(); 
            $table->integer('province_id')->unsigned(); 
            $table->integer('municipal_id')->unsigned(); 
            $table->integer('barangay_id')->unsigned(); 
            $table->foreign('region_id')->references('id')->on('regions'); 
            $table->foreign('province_id')->references('id')->on('provinces'); 
            $table->foreign('municipal_id')->references('id')->on('municipals');
            $table->foreign('barangay_id')->references('id')->on('barangays'); 
            $table->timestamps();
        });

        Schema::create('nationalpolicies' , function (Blueprint $table) {
            $table->increments('id');
            $table->integer('2aRating');
            $table->integer('2bRating');
            $table->integer('2cRating');
            $table->integer('2dRating');
            $table->integer('2eRating');
            $table->integer('2fRating');
            $table->integer('2gRating'); 
            $table->integer('2hRating'); 
            $table->integer('2iRating'); 
            $table->integer('2jRating'); 
            $table->integer('2kRating'); 
            $table->integer('2lRating'); 
            $table->integer('2mRating'); 
            $table->string('2aRemarks',255);
            $table->string('2bRemarks',255);
            $table->string('2cRemarks',255);
            $table->string('2dRemarks',255);
            $table->string('2eRemarks',255);
            $table->string('2fRemarks',255);
            $table->string('2gRemarks',255); 
            $table->string('2hRemarks',255); 
            $table->string('2iRemarks',255); 
            $table->string('2jRemarks',255); 
            $table->string('2kRemarks',255); 
            $table->string('2lRemarks',255); 
            $table->string('2mRemarks',255); 
            $table->integer('region_id')->unsigned(); 
            $table->integer('province_id')->unsigned(); 
            $table->integer('municipal_id')->unsigned(); 
            $table->integer('barangay_id')->unsigned(); 
            $table->foreign('region_id')->references('id')->on('regions'); 
            $table->foreign('province_id')->references('id')->on('provinces'); 
            $table->foreign('municipal_id')->references('id')->on('municipals');
            $table->foreign('barangay_id')->references('id')->on('barangays'); 
            $table->timestamps();
        });

        Schema::create('governances' , function (Blueprint $table) {
            $table->increments('id');
            $table->integer('3aRating');
            $table->integer('3bRating');
            $table->integer('3cRating');
            $table->string('3aRemarks', 255);
            $table->string('3bRemarks', 255);
            $table->string('3cRemarks', 255);
            $table->integer('region_id')->unsigned(); 
            $table->integer('province_id')->unsigned(); 
            $table->integer('municipal_id')->unsigned(); 
            $table->integer('barangay_id')->unsigned(); 
            $table->foreign('region_id')->references('id')->on('regions'); 
            $table->foreign('province_id')->references('id')->on('provinces'); 
            $table->foreign('municipal_id')->references('id')->on('municipals');
            $table->foreign('barangay_id')->references('id')->on('barangays'); 
            $table->timestamps();
        });

        Schema::create('managements' , function (Blueprint $table) {
            $table->increments('id');
            $table->integer('5a1Rating');
            $table->integer('5a2Rating');
            $table->integer('5a3Rating');
            $table->integer('5a4Rating');
            $table->integer('5a5Rating');
            $table->integer('5b6Rating');
            $table->integer('5b7Rating');
            $table->integer('5c8Rating');
            $table->integer('5c9Rating');
            $table->integer('5c10Rating');
            $table->integer('5c11Rating');
            $table->integer('5d12Rating');
            $table->integer('5d13Rating');
            $table->integer('5d14Rating');
            $table->integer('5e15Rating');
            $table->integer('5e16Rating');
            $table->integer('5e17Rating');
            $table->integer('5e18Rating');
            $table->integer('5e19Rating');
            $table->integer('5e20Rating');
            $table->integer('5f21Rating');
            $table->integer('5f22Rating');
            $table->integer('5f23Rating');
            $table->integer('5g24Rating');
            $table->integer('5g25Rating');
            $table->integer('5g26Rating');
            $table->integer('5h27Rating');
            $table->integer('5h28Rating');
            $table->integer('5h29Rating');
            $table->integer('5h30Rating');
            $table->integer('5i31Rating');
            $table->integer('5i32Rating');
            $table->integer('5i33Rating');
            $table->integer('5i34Rating');
            $table->integer('5i35Rating');
            $table->integer('5i36Rating');
            $table->integer('5i37Rating');
            $table->integer('5i38Rating');
            $table->integer('5a1Remarks');
            $table->string('5a2Remarks', 255);
            $table->string('5a3Remarks', 255);
            $table->string('5a4Remarks', 255);
            $table->string('5a5Remarks', 255);
            $table->string('5b6Remarks', 255);
            $table->string('5b7Remarks', 255);
            $table->string('5c8Remarks', 255);
            $table->string('5c9Remarks', 255);
            $table->string('5c10Remarks', 255);
            $table->string('5c11Remarks', 255);
            $table->string('5d12Remarks', 255);
            $table->string('5d13Remarks', 255);
            $table->string('5d14Remarks', 255);
            $table->string('5e15Remarks', 255);
            $table->string('5e16Remarks', 255);
            $table->string('5e17Remarks', 255);
            $table->string('5e18Remarks', 255);
            $table->string('5e19Remarks', 255);
            $table->string('5e20Remarks', 255);
            $table->string('5f21Remarks', 255);
            $table->string('5f22Remarks', 255);
            $table->string('5f23Remarks', 255);
            $table->string('5g24Remarks', 255);
            $table->string('5g25Remarks', 255);
            $table->string('5g26Remarks', 255);
            $table->string('5h27Remarks', 255);
            $table->string('5h28Remarks', 255);
            $table->string('5h29Remarks', 255);
            $table->string('5h30Remarks', 255);
            $table->string('5i31Remarks', 255);
            $table->string('5i32Remarks', 255);
            $table->string('5i33Remarks', 255);
            $table->string('5i34Remarks', 255);
            $table->string('5i35Remarks', 255);
            $table->string('5i36Remarks', 255);
            $table->string('5i37Remarks', 255);
            $table->string('5i38Remarks', 255);
            $table->integer('region_id')->unsigned(); 
            $table->integer('province_id')->unsigned(); 
            $table->integer('municipal_id')->unsigned(); 
            $table->integer('barangay_id')->unsigned(); 
            $table->foreign('region_id')->references('id')->on('regions'); 
            $table->foreign('province_id')->references('id')->on('provinces'); 
            $table->foreign('municipal_id')->references('id')->on('municipals');
            $table->foreign('barangay_id')->references('id')->on('barangays'); 
            $table->timestamps();
        });





    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mellpro');
    }
};
