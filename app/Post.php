<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// class Post extends Model
// {
//     //20170525
//     // 黑名單和白名單一次只可以使用一個
//     protected $fillable = ['title', 'fulltexte']; //白名單
//     // protected $guarade = ['title', 'fulltexte']; //黑名單
// }

class Post extends Model
{

    //軟刪除必加SoftDeletes
    use SoftDeletes;
    protected $dataes =["delete_at"];
    //軟刪除必加SoftDeletes END

    protected $fillable = ['title', 'fulltext']; //白名單


    //20170608
    //1對1 Post與User 
    public function user(){
        return $this->belongsTo('App\User');
    }

    //20170615
    //1對多 Photo 
    public function photos(){
        return $this->morphMany("App\Photo","imageable");
    }

    //20170622
    public function tags(){
        return $this->morphToMany("App\Tag","taggable");
    }
}