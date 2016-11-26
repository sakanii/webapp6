<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createrequestform extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requestforms', function (Blueprint $table) {
              $table->increments('req_id');
          $table->integer('room_id');

            $table->string('first_name');
            $table->string('last_name');
   $table->string('student_email');
            $table->string('city');
            $table->string('type_of_pay');
            $table->integer('student_phone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('requestforms' );
    }
}
