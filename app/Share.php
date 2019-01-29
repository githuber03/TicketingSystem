<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
   protected $table = 'tickets';
   
   protected $fillable =  [
	'share_ticket',
	'share_name',
	'share_price'
   ];
}
