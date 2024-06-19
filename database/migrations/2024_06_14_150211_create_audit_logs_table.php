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
        Schema::create('audit_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userid')->unsigned();
            $table->integer('event_type');
            $table->string('module_name');
            $table->integer('module_entry_id')->unsigned();
            $table->string('origin')->nullable();
            $table->string('ip_address')->nullable();
            $table->integer('delta_id')->unsigned()->nullable();
            
            $table->foreign('delta_id')->references('id')->on('audit_logs_deltas');
            $table->timestamps();
        });

        Schema::create('audit_logs_deltas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('log_id');
            $table->text('data_before');
            $table->text('data_after');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audit_logs');
        Schema::dropIfExists('audit_logs_deltas');
    }
};
