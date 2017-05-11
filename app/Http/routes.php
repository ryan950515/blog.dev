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
Route::get('/demo', function () {
    return view('welcome');
//     // return ("Hello World");
//     // return ("<h2>123</h2>");
});

// Route::get('/about', function () {
//     return ("Page: About");
// });

// Route::get('/content', function () {
//     return ("Page: Content");
// });
// 20170420使用control中的method使用@
Route::get('contact', 'PostsController@showContact');


// Route::get('post/{id}', 'PostsController@showPost');

Route::get('post/{category}/{date}/{id}', 'PostsController@showPostCategory');
// Route::get('/post/{id},{id2}/{name}', function ($id, $id2, $name) {
//     return ("Page: Content: ".$id.$id2." Name: ".$name);
// });

// Route::get('/admin/post/demo', array("as"=>"admin.demo", function () {
//     return ("This is alias test!");
// }));

//not closur is controller
// Route::get('post','PostsController@index');

//controller set variable
// Route::get('post/{id}','PostsController@index');

// Route::get('post/{id}/{name}','PostsController@index');

// Route::resource('posts', 'PostsController');

Route::get('error', function(){
    return view("errors.503");
    // 也可以使用\
    // return view("errors\503");

});

Route::get('insert', function(){
    DB::insert('insert into posts (title, `fulltext`) values ("123","test")');
    // DB::insert('insert into posts (title, `fulltext`) values (?, ?)', ["hi", "hellworld"]);
});

Route::get('read', function() {
    //
    $results = DB::select('select * from posts where 1 = ?', [1]);
    // return $results;
    // foreach ($results as $result) {
    //     # code...
    //     echo $result->title;
    //     // return 只能回傳1筆，echo才可以回傳多筆
        
    // }
    var_dump($results);
});

Route::get('update', function(){
    // DB::update('update posts set title = "天氣很好" where id = ?', [1]);
    //使用var_dump觀察
    $sql=    DB::update('update posts set title = "天氣很好" where id = ?', [1]);
    var_dump($sql);

});


Route::get('delete', function(){
    DB::delete('delete from posts where id = ?', [2]);
});