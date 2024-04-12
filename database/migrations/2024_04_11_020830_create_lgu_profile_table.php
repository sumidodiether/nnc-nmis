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
        Schema::create('lgu_profile', function (Blueprint $table) {
            $table->id();
            $table->string('barangay', 225);
            $table->string('municipality', 225);
            $table->string('province', 225);
            $table->string('income_class', 225);
            $table->date('date_of_monitoring');
            $table->year('period_covered');
            $table->integer('lgu_demographics_id');
            $table->integer('population');
            $table->float('nutritional_status', 8, 2);
            $table->string('land_use_classification', 225);
            $table->integer('intervention_from_nga_standards_id');
            $table->text('source');
            $table->text('available_or_received');
            $table->date('date_of_receipt');
            $table->integer('number_of_pax');
            $table->text('remarks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lgu_profile');
    }
};
