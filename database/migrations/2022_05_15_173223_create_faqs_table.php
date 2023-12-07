<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqsTable extends Migration
{


    public function up()
    {
        Schema::create('faqs', function (Blueprint $table) {
            $table->id();
            $table->string("title_uz");
            $table->string("title_ru");
            $table->string("title_en");
            $table->longText("text_uz");
            $table->longText("text_ru");
            $table->longText("text_en");
            $table->timestamps();
        });
    }

  
    
    public function down()
    {
        Schema::dropIfExists('faqs');
    }
}
