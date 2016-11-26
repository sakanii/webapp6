<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomdes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartmentdescriptions', function (Blueprint $table) {
             $table->increments('des_id');
            $table->string('internet');
            $table->string('supermarket');
         $table->integer('resturant');
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
        Schema::drop('apartmentdescriptions');
    }
}
