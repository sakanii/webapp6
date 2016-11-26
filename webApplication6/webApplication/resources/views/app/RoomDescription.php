<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomDescription extends Model
{
    //
    protected $table ='roomdescription';
           protected $fillable = ['room_id', 'room_type','campus_type','bathroom',
           'owner_id'];

    
}
