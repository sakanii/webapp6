<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApartmentTable extends Migration
{
      /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apartment', function (Blueprint $table) {
            //
            $table->increments('apartment_id');
           $table->string('gender');
            $table->integer('floor');

              $table->string('location');
            $table->integer('num_of_room');
            $table->integer('owner_id');
            $table->integer('des_id');
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
        Schema::drop('apartment');

}
}

