<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    //
	 protected $table ='room';
	     protected $fillable=[ 'room_id', 'apartment_id','beds_num'  ,'room_type' ,'bathroom_type','availability','price'];

}
