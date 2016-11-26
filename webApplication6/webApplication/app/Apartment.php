<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
	 protected $table ='apartment';
	     protected $fillable=[ 'gender', 'floor','location'  ,'num_of_room' ,'owner_id','des_id'];


    //
}
