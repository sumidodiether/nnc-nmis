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
        Schema::create('mplgubrgylncmanagement' , function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rating3a');
            $table->integer('rating3b');
            $table->integer('rating3c');
            $table->integer('rating3d');
            $table->integer('rating3e');
            $table->integer('rating3f');
            $table->integer('rating3g'); 
            $table->string('remarks3a', 255);
            $table->string('remarks3b', 255);
            $table->string('remarks3c', 255);
            $table->string('remarks3d', 255);
            $table->string('remarks3e', 255);
            $table->string('remarks3f', 255);
            $table->string('remarks3g', 255);
            $table->integer('status');
            $table->date('dateCreated');
            $table->date('dateUpdates');
            $table->date('dateMonitoring');
            $table->date('periodCovereda');
            $table->date('periodCoveredb');
            $table->integer('region_id')->unsigned(); 
            $table->integer('province_id')->unsigned(); 
            $table->integer('municipal_id')->unsigned(); 
            $table->integer('barangay_id')->unsigned(); 
            $table->integer('user_id')->unsigned();
            
            $table->foreign('user_id')->references('id')->on('users'); 
            $table->foreign('province_id')->references('id')->on('provinces'); 
            $table->foreign('region_id')->references('id')->on('regions'); 
            $table->foreign('municipal_id')->references('id')->on('municipals');
            $table->foreign('barangay_id')->references('id')->on('barangays'); 
            $table->timestamps();
        });

        Schema::create('mplgubrgylncmanagementtracking', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status'); 
            $table->integer('barangay_id')->unsigned(); 
            $table->integer('municipal_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('mplgubrgylncmanagement_id')->unsigned(); 
            $table->foreign('mplgubrgylncmanagement_id')->references('id')->on('mplgubrgylncmanagement');
            $table->foreign('municipal_id')->references('id')->on('municipals');
            $table->foreign('barangay_id')->references('id')->on('barangays'); 
            $table->foreign('user_id')->references('id')->on('users'); 
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mplgubrgylncmanagement');
        Schema::dropIfExists('mplgubrgylncmanagementtracking');
    }
};
