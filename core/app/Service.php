<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function portfolios(){
        return $this->hasMany('App\Portfolio');
    }
}
