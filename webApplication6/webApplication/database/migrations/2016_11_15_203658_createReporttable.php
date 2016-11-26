<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReporttable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reportes', function (Blueprint $table) {
            $table->increments('report_id');
             $table->timestamps();
             $table->string('email');
            $table->string('name')->varchar(255);
            $table->date('date');
            $table->integer('telephone')->int(10);
            $table->string('msg')->varchar(255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reportes');
    }
}
