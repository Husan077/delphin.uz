<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWhyusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whyuses', function (Blueprint $table) {
            $table->id();
            $table->string("title_uz")->nullable();
            $table->string("title_ru")->nullable();
            $table->string("title_en")->nullable();
            $table->longText("text_uz")->nullable();
            $table->longText("text_ru")->nullable();
            $table->longText("text_en")->nullable();
            $table->string("number")->nullable();
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
        Schema::dropIfExists('whyuses');
    }
}
