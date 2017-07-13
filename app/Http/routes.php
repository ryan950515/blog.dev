<?php

//20170525
use App\Post;
//20170608
use App\User;
use App\Role;
use App\Country;
use App\Photo;
use App\Taggable;
use App\Tag;


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//20170706
//靜態方法
Route::resource('/posts', 'PostsController');