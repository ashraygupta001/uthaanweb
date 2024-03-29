<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function user(){
		return $this->belongsTo(\App\User::class);
	}

		protected $fillable = ['heading','description','winners','date','image'];


}

