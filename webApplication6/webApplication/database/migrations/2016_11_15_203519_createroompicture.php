<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createroompicture extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('roompictures', function (Blueprint $table) {
           $table->increments('picture_id');
            $table->integer('room_id');
			$table->integer('apartment_id');

            $table->file('room_picture');
            $table->text('image_path');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('roompictures');
    }
}
