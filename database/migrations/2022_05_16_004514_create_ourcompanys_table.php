<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurcompanysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ourcompanys', function (Blueprint $table) {
            $table->id();
            $table->string("title_uz");
            $table->string("title_ru");
            $table->string("title_en");
            $table->longText("text_uz");
            $table->longText("text_ru");
            $table->longText("text_en");
            $table->string("number");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ourcompanys');
    }
}
