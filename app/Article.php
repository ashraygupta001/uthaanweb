<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public function user(){
		return $this->belongsTo(\App\User::class);
	}

	protected $fillable = ['heading','content','writer','image1','image2','image3'];

}
