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
        Schema::create('regions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('region', 100);
            $table->string('regclass', 100);
            $table->integer('regnumber');
            
            $table->integer('psgccode_id')->unsigned(); 
            $table->foreign('psgccode_id')->references('id')->on('psgcs');
            $table->timestamps();
        }); 

        Schema::create('provinces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('province', 100);
            $table->string('proclass', 100);
            $table->integer('provnumber');

            $table->integer('psgccode_id')->unsigned(); 
            $table->foreign('psgccode_id')->references('id')->on('psgcs');

            $table->integer('region_id')->unsigned(); 
            $table->foreign('region_id')->references('id')->on('regions'); 
            $table->timestamps();

        }); 

        Schema::create('municipals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('municipal', 100);
            $table->string('munclass', 100);
            $table->integer('munnumber');

            $table->integer('psgccode_id')->unsigned(); 
            $table->foreign('psgccode_id')->references('id')->on('psgcs');

            $table->integer('province_id')->unsigned(); 
            $table->foreign('province_id')->references('id')->on('provinces'); 
            $table->timestamps();

        }); 

        Schema::create('barangays', function (Blueprint $table) {
            $table->increments('id');
            $table->string('barangay', 100);
            $table->string('brgytype', 100);
            $table->integer('brgynumber');   //urban/rural

            $table->integer('municipal_id')->unsigned(); 
            $table->foreign('municipal_id')->references('id')->on('municipals');

            $table->integer('city_id')->unsigned(); 
            $table->foreign('city_id')->references('id')->on('citys');
            
            $table->integer('psgccode_id')->unsigned(); 
            $table->foreign('psgccode_id')->references('id')->on('psgcs');
            $table->timestamps();
        }); 

        // Forms&Rating
        Schema::create('visionmissions' , function (Blueprint $table) {
            $table->increments('id');
            $table->string('rating1a');
            $table->integer('rating1b');
            $table->integer('rating1c');
            $table->string('remarks1a', 255);
            $table->string('remarks1b', 255);
            $table->string('remarks1c', 255);
            $table->integer('region_id')->unsigned(); 
            $table->integer('province_id')->unsigned(); 
            $table->integer('municipal_id')->unsigned(); 
            $table->integer('barangay_id')->unsigned(); 
            $table->integer('lguprofile_id')->unsigned(); 
            $table->foreign('lguprofile_id')->references('id')->on('lguprofile'); 
            $table->foreign('province_id')->references('id')->on('provinces'); 
            $table->foreign('municipal_id')->references('id')->on('municipals');
            $table->foreign('barangay_id')->references('id')->on('barangays'); 
            $table->timestamps();
        });

        Schema::create('nationalpolicies' , function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rating2a');
            $table->integer('rating2b');
            $table->integer('rating2c');
            $table->integer('rating2d');
            $table->integer('rating2e');
            $table->integer('rating2f');
            $table->integer('rating2g'); 
            $table->integer('rating2h'); 
            $table->integer('rating2i'); 
            $table->integer('rating2j'); 
            $table->integer('rating2k'); 
            $table->integer('rating2l'); 
            $table->integer('rating2m'); 
            $table->string('remarks2a',255);
            $table->string('remarks2b',255);
            $table->string('remarks2c',255);
            $table->string('remarks2d',255);
            $table->string('remarks2e',255);
            $table->string('remarks2f',255);
            $table->string('remarks2g',255); 
            $table->string('remarks2h',255); 
            $table->string('remarks2i',255); 
            $table->string('remarks2j',255); 
            $table->string('remarks2k',255); 
            $table->string('remarks2l',255); 
            $table->string('remarks2m',255); 
            $table->integer('region_id')->unsigned(); 
            $table->integer('province_id')->unsigned(); 
            $table->integer('municipal_id')->unsigned(); 
            $table->integer('barangay_id')->unsigned(); 
            $table->integer('lguprofile_id')->unsigned(); 
            $table->foreign('lguprofile_id')->references('id')->on('lguprofile'); 
            $table->foreign('region_id')->references('id')->on('regions');
            $table->foreign('province_id')->references('id')->on('provinces'); 
            $table->foreign('municipal_id')->references('id')->on('municipals');
            $table->foreign('barangay_id')->references('id')->on('barangays'); 
            $table->timestamps();
        });

        Schema::create('governances' , function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rating3a');
            $table->integer('rating3b');
            $table->integer('rating3c');
            $table->string('remarks3a', 255);
            $table->string('remarks3b', 255);
            $table->string('remarks3c', 255);
            $table->integer('region_id')->unsigned(); 
            $table->integer('province_id')->unsigned(); 
            $table->integer('municipal_id')->unsigned(); 
            $table->integer('barangay_id')->unsigned(); 
            $table->integer('lguprofile_id')->unsigned(); 
            $table->foreign('lguprofile_id')->references('id')->on('lguprofile'); 
            $table->foreign('province_id')->references('id')->on('provinces'); 
            $table->foreign('municipal_id')->references('id')->on('municipals');
            $table->foreign('barangay_id')->references('id')->on('barangays'); 
            $table->timestamps();
        });

        Schema::create('nutrition_intervention' , function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rating5a1');
            $table->integer('rating5a2');
            $table->integer('rating5a3');
            $table->integer('rating5a4');
            $table->integer('rating5a5');
            $table->integer('rating5b6');
            $table->integer('rating5b7');
            $table->integer('rating5c8');
            $table->integer('rating5c9');
            $table->integer('rating5c10');
            $table->integer('rating5c11');
            $table->integer('rating5d12');
            $table->integer('rating5d13');
            $table->integer('rating5d14');
            $table->integer('rating5e15');
            $table->integer('rating5e16');
            $table->integer('rating5e17');
            $table->integer('rating5e18');
            $table->integer('rating5e19');
            $table->integer('rating5e20');
            $table->integer('rating5f21');
            $table->integer('rating5f22');
            $table->integer('rating5f23');
            $table->integer('rating5g24');
            $table->integer('rating5g25');
            $table->integer('rating5g26');
            $table->integer('rating5h27');
            $table->integer('rating5h28');
            $table->integer('rating5h29');
            $table->integer('rating5h30');
            $table->integer('rating5i31');
            $table->integer('rating5i32');
            $table->integer('rating5i33');
            $table->integer('rating5i34');
            $table->integer('rating5i35');
            $table->integer('rating5i36');
            $table->integer('rating5i37');
            $table->integer('rating5i38');
            $table->string('remarks5a1', 255);
            $table->string('remarks5a2', 255);
            $table->string('remarks5a3', 255);
            $table->string('remarks5a4', 255);
            $table->string('remarks5a5', 255);
            $table->string('remarks5b6', 255);
            $table->string('remarks5b7', 255);
            $table->string('remarks5c8', 255);
            $table->string('remarks5c9', 255);
            $table->string('remarks5c10', 255);
            $table->string('remarks5c11', 255);
            $table->string('remarks5d12', 255);
            $table->string('remarks5d13', 255);
            $table->string('remarks5d14', 255);
            $table->string('remarks5e15', 255);
            $table->string('remarks5e16', 255);
            $table->string('remarks5e17', 255);
            $table->string('remarks5e18', 255);
            $table->string('remarks5e19', 255);
            $table->string('remarks5e20', 255);
            $table->string('remarks5f21', 255);
            $table->string('remarks5f22', 255);
            $table->string('remarks5f23', 255);
            $table->string('remarks5g24', 255);
            $table->string('remarks5g25', 255);
            $table->string('remarks5g26', 255);
            $table->string('remarks5h27', 255);
            $table->string('remarks5h28', 255);
            $table->string('remarks5h29', 255);
            $table->string('remarks5h30', 255);
            $table->string('remarks5i31', 255);
            $table->string('remarks5i32', 255);
            $table->string('remarks5i33', 255);
            $table->string('remarks5i34', 255);
            $table->string('remarks5i35', 255);
            $table->string('remarks5i36', 255);
            $table->string('remarks5i37', 255);
            $table->string('remarks5i38', 255);
            $table->integer('region_id')->unsigned(); 
            $table->integer('province_id')->unsigned(); 
            $table->integer('municipal_id')->unsigned(); 
            $table->integer('barangay_id')->unsigned(); 
            $table->integer('lguprofile_id')->unsigned(); 
            $table->foreign('lguprofile_id')->references('id')->on('lguprofile'); 
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
        // Schema::dropIfExists('mellpro');
        // Schema::dropIfExists('provinces');
        // Schema::dropIfExists('municipals');
        // Schema::dropIfExists('barangays');
        Schema::dropIfExists('visionmissions');
        Schema::dropIfExists('nationalpolicies');
        Schema::dropIfExists('governances');
        Schema::dropIfExists('nutrition_intervention');
    }
};
