<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //20170622
    public function tags(){
        return $this->morphToMany("App\Tag","taggable");
    }
}
