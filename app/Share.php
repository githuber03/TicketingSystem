<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Share extends Model
{
   protected $table = 'tickets';
   
   protected $fillable =  [
	'share_ticket',
	'share_name',
	'share_department',
	'ticketquery_id'
   ];

    public function ticketQuiries(){
      return $this->hasOne('App\TicketQuries','ticketquery_code','ticketquery_id');
    }
}
