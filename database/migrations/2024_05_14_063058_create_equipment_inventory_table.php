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
        Schema::create('equipment_inventory', function (Blueprint $table) {
            $table->id();
            $table->integer('totalBarangay');
            $table->integer('woodenHB');
            $table->integer('nonWoodenHB');
            $table->double('defectiveHB', 3, 2);
            $table->double('totalHB', 15, 2);
            $table->double('availabilityHB', 15, 2);
            $table->integer('steelRules');
            $table->integer('microtoise');
            $table->integer('infantometer');
            $table->string('remarksHB');
            $table->integer('hangingType');
            $table->integer('defectiveWS');
            $table->double('totalWS', 15, 2);
            $table->double('availabilityWS', 15, 2);
            $table->integer('infatScale');
            $table->integer('beamBalance');
            $table->string('remarksWS');
            $table->integer('child');
            $table->integer('defectiveMUAC_child');
            $table->double('totalMUAC_Child', 15, 2);
            $table->double('availabilityMUAC_child', 15, 2);
            $table->integer('adults');
            $table->integer('defectiveMUAC_adults');
            $table->double('totalMUAC_adults', 15, 2);
            $table->double('availabilityMUAC_adults', 15, 2);
            $table->string('remarksMUAC');

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
        Schema::dropIfExists('equipment_inventory');
    }
};
