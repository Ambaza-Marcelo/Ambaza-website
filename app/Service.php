<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable = [
    	'title',
    	'description',
    	'image'
    ];

    public function encourage()
    {
    	return $this->hasMany('App\Encourage','service_id');
    }
}
