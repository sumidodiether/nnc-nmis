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
        Schema::create('formbuilderA', function (Blueprint $table) {
            //Cat  Name
            $table->id();
            $table->string('formAname'); 
            $table->string('status');
            $table->timestamps();
        });

        Schema::create('formbuilderB', function (Blueprint $table) {
            //form name
            $table->id();
            $table->string('formBname');
            $table->string('status');
            $table->integer('formbuilderA_id')->unsigned(); 
            $table->foreign('formbuilderA_id')->references('id')->on('formbuilderA')->onDelete('cascade');
            $table->timestamps();
        });
        
        Schema::create('formfields', function (Blueprint $table) {
            // form fields 
            $table->id();
            $table->string('name'); 
            $table->string('label');
            $table->string('type');
            $table->string('status');
            $table->timestamps();

            //get id to main cat and form title
            $table->integer('formbuilderB_id')->unsigned();  
            $table->integer('formbuilderA_id')->unsigned(); 
            $table->foreign('formbuilderA_id')->references('id')->on('formbuilderA')->onDelete('cascade');
            $table->foreign('formbuilderB_id')->references('id')->on('formbuilderB')->onDelete('cascade');
        }); 

        Schema::create('form_submitdata', function (Blueprint $table) {
            $table->id();
            $table->integer('formbuilderB_id')->unsigned(); 
            $table->json('data');
            $table->timestamps();
            
            //get id from forms:: link to form
            $table->foreign('formbuilderB_id')->references('id')->on('formbuilderB')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formbuilder');
    }
};
