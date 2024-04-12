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
        Schema::create('nutrition_services', function (Blueprint $table) {
            $table->id();
            $table->string('barangay', 225);
            $table->string('municipality', 225);
            $table->string('province', 225);
            $table->string('income_class', 225);
            $table->date('date_of_monitoring');
            $table->year('period_covered');
            $table->float('main_items', 8, 2);
            $table->integer('rating');
            $table->text('remark');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nutrition_services');
    }
};
