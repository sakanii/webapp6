<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    // 
    protected $table ='reportes';
       protected $fillable = ['report_id', 'name','email','telephone','date','msg'];

}
