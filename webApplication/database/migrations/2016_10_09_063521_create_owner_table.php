<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnerTable extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owner', function (Blueprint $table) {
            //
            $table->increments('owner_id');
            $table->string('owner_name');
            $table->string('owner_email');
            $table->integer('owner_phone');
            $table->integer('bank_account');
            $table->string('bank_name');

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
        Schema::drop('owner');

}
}