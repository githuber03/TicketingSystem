<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TicketQuries extends Model
{
    //
    protected $table = 'tickets_quries';

    public function shares(){
    	$this->belongsTo('App\Share');
    }

}
