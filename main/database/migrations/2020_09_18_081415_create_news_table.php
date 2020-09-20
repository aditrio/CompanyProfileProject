<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->timestamps();
            $table->string('title',255);
            $table->text('content');
            $table->string('slug',255);
            $table->integer('view')->unsigned()->nullable();
            $table->integer('headline')->unsigned();
            $table->string('imagePath',255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
