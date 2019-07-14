<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
     public function user(){
		return $this->belongsTo(\App\User::class);
	}
	protected $fillable = ['heading','description','link','thumbnail','show_type'];

}
