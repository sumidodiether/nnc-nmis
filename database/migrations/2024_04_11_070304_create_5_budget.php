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
        Schema::create('5_budget', function (Blueprint $table) {
            $table->id();
            $table->float('header_cy');
            $table->text('LGU');
            $table->integer('tables');
            $table->integer('breakdown_of_funds');
            $table->float('nutrition_budget');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('5_budget');
    }
};
