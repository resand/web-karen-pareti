<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDresses extends Migration
{

    public function up()
    {
        Schema::create('dresses', function (Blueprint $table) {
            $table->increments('id');
            $table->text('image');
            $table->integer('collection');
            $table->text('name');
            $table->text('description');
            $table->text('composition');
            $table->integer('collection');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('dresses');
    }
}
