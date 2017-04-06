<?php

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

// closure function
// Route::get('/demo', function () {
//     return view('welcome');
//     // return ("Hello World");
//     // return ("<h2>123</h2>");
// });

Route::get('/about', function () {
    return ("Page: About");
});

Route::get('/content', function () {
    return ("Page: Content");
});

Route::get('/post/{id},{id2}/{name}', function ($id, $id2, $name) {
    return ("Page: Content: ".$id.$id2." Name: ".$name);
});

Route::get('/admin/post/demo', array("as"=>"admin.demo", function () {
    return ("This is alias test!");
}));