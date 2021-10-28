<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Encourage extends Model
{
    //
    protected $fillable = [
    	'name','service_id','description','image'
    ];



    public function service()
    {
    	return $this->belongsTo('App\Service');
    }
}
