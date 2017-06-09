<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
       //20170608
    public function users(){
        return $this->belongsToMany('App\User');
    }
}
