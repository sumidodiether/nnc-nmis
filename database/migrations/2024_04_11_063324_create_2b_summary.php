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
        Schema::create('2b_summary', function (Blueprint $table) {
            $table->id();
            $table->string('barangay', 225);
            $table->string('municipality', 225);
            $table->string('province', 225);
            $table->string('income_class', 225);
            $table->date('date_of_monitoring');
            $table->year('period_covered');
            $table->float('performance_level', 8, 2);
            $table->float('current_rating', 8, 2);
            $table->float('performance_rating', 8, 2);

            $table->float('summary_of_ratings_per_dimension', 8, 2);
            $table->text('remarks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('2b_summary');
    }
};
