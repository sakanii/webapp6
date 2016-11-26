<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    //
	 protected $table ='owner';
	     protected $fillable=[ 'owner_id', 'owner_email','owner_phone'  ,'bank_account' ,'bank_name','owner_name'];

}
