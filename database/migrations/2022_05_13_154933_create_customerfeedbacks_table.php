<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerfeedbacksTable extends Migration
{
    
    public function up()
    {
        Schema::create('customerfeedbacks', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name_uz')->nullable();
            $table->string('customer_name_ru')->nullable();
            $table->string('customer_name_en')->nullable();
            $table->string('text_uz')->nullable();
            $table->string('text_ru')->nullable();
            $table->string('text_en')->nullable();
            $table->string('image')->nullable("mimes:png,gif,svg,jpeg|max:10000");
            $table->timestamps();
        });
    }

   
    public function down()
    {
        Schema::dropIfExists('customerfeedbacks');
    }
}
