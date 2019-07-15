<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    public function user(){
		return $this->belongsTo(\App\User::class);
	}

	protected $fillable = ['heading','content','reporters','photographer','image1','image2','image3'];
}
