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
        Schema::create('nao_and_npc_directory_blank', function (Blueprint $table) {
            $table->id();
            $table->integer('psgc_code');
            $table->string('region',225);
            $table->string('province', 225);
            $table->string('municipality', 225);
            $table->string('mane_of_gov_or_mayor');
            $table->string('last_name',225);
            $table->string('first_name', 225);
            $table->string('middle_name', 225);
            $table->string('suffix', 50);
            $table->string('sex', 50);
            $table->date('birthdate');
            $table->integer('age');
            $table->string('educational_background');
            $table->string('degree_courses_or_years_finished');
            $table->string('type_of_nao');
            $table->string('type_of_designation');
            $table->date('date_of_designation');
            $table->string('office_position_or_title');
            $table->string('office_or_department');
            $table->string('cellphone_number');
            $table->string('telephone_number');
            $table->string('email_address');
            $table->string('address');
            $table->string('dncap_membership');
            $table->string('dncap_position');
            $table->string('national_or_regional');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nao_and_npc_directory_blank');
    }
};
