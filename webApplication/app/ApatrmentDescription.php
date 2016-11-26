<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ApatrmentDescription extends Model
{
    //
	 protected $table ='apartmentdescriptions';
	     protected $fillable=[ 'des_id', 'internet','supermarket'  ,'resturant' ];

}
