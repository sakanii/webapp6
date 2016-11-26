<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room', function (Blueprint $table) {
            //
            $table->increments('room_id');
             $table->integer('apartment_id');
            $table->integer('beds_num');
            $table->string('room_type');

              $table->double('price');
            $table->string('bathroom_type');
            $table->integer('availability');
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
        Schema::drop('room');

}
}

