<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //20170525
    // 黑名單和白名單一次只可以使用一個
    protected $fillable = ['title', 'fulltexte']; //白名單
    // protected $guarade = ['title', 'fulltexte']; //黑名單
}
