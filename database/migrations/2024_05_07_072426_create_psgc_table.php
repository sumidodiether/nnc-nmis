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
        Schema::create('psgcs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('psgccode');//10 digit number
            $table->integer('correspondencecode');//10 digit number
            $table->string('geolevel', 100);//10 digit number
            $table->string('oldname', 100);//10 digit number
            $table->string('incomeclass', 100);//10 digit number
            $table->timestamps();
        });

        Schema::create('population', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('psgccode'); //10 digit number
            $table->date('year');
            $table->integer('correspondencecode'); //10 digit number
            $table->string('geolevel', 100); //10 digit number (Reg, Prov, Mun, Bgy, Dist, Submun, SGU)
            $table->string('incomeclass', 100); //10 digit number

            $table->integer('psgccode_id')->unsigned(); 
            $table->foreign('psgccode_id')->references('id')->on('psgcs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('psgcs');
        Schema::dropIfExists('population');
    }
};
