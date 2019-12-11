<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->float('prix');
            $table->string('description');
            $table->string('emplacement');
            $table->string('type');
            $table->bigInteger('user_id');
            $table->bigInteger('images_id');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('images_id')->references('id')->on('images');


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
        Schema::dropIfExists('articles');
    }
}
