<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestForm extends Model
{
    //
     protected $table='request';
    protected $fillable=[ 'res_id', 'room_id','first_name'  ,'last_name' ,'city','student_phone','type_of_pay','student_email'];
}
