<?php

//20170525
use App\Post;
//20170608
use App\User;
use App\Role;
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

// // closure function
// Route::get('/demo', function () {
//     return view('welcome');
// //     // return ("Hello World");
// //     // return ("<h2>123</h2>");
// });

// // Route::get('/about', function () {
// //     return ("Page: About");
// // });

// // Route::get('/content', function () {
// //     return ("Page: Content");
// // });
// // 20170420使用control中的method使用@
// Route::get('contact', 'PostsController@showContact');


// // Route::get('post/{id}', 'PostsController@showPost');

// Route::get('post/{category}/{date}/{id}', 'PostsController@showPostCategory');
// // Route::get('/post/{id},{id2}/{name}', function ($id, $id2, $name) {
// //     return ("Page: Content: ".$id.$id2." Name: ".$name);
// // });

// // Route::get('/admin/post/demo', array("as"=>"admin.demo", function () {
// //     return ("This is alias test!");
// // }));

// //not closur is controller
// // Route::get('post','PostsController@index');

// //controller set variable
// // Route::get('post/{id}','PostsController@index');

// // Route::get('post/{id}/{name}','PostsController@index');

// // Route::resource('posts', 'PostsController');

// Route::get('error', function(){
//     return view("errors.503");
//     // 也可以使用\
//     // return view("errors\503");

// });

// Route::get('insert', function(){
//     DB::insert('insert into posts (title, `fulltext`) values ("123","test")');
//     // DB::insert('insert into posts (title, `fulltext`) values (?, ?)', ["hi", "hellworld"]);
// });

// Route::get('read', function() {
//     //
//     $results = DB::select('select * from posts where 1 = ?', [1]);
//     // return $results;
//     // foreach ($results as $result) {
//     //     # code...
//     //     echo $result->title;
//     //     // return 只能回傳1筆，echo才可以回傳多筆
        
//     // }
//     var_dump($results);
// });

// Route::get('update', function(){
//     // DB::update('update posts set title = "天氣很好" where id = ?', [1]);
//     //使用var_dump觀察
//     $sql=    DB::update('update posts set title = "天氣很好" where id = ?', [1]);
//     var_dump($sql);

// });


// Route::get('delete', function(){
//     DB::delete('delete from posts where id = ?', [2]);
// });


//20170525
// use App\Post;-->要放在最上面

//20170525 select
Route::get('read', function(){
    //select all
    // $posts = Post::all();

     // foreach($posts as $post){
    //     echo $post->id . "-" . $post->title . "<br>\n";
    // }

    //select by where
    // $posts = Post::where('is_admin',0)
    //         ->orderBy('id','desc')
    //         ->take(2)
    //         ->get();

     // foreach($posts as $post){
    //     echo $post->id . "-" . $post->title . "<br>\n";
    // }

    //20170525
    //select by rule
    // $post = Post::find(2);
    // return $post;

    //20170525
    //select first
    $post = Post::where('is_admin',0)->first();
    // return $post;

    return $post->title;

});




    //20170522 insert
    // Route::get('insert', function(){
    //     $post = new Post;

    //     $post->title="hello";
    //     $post->fulltext="helloworld this is insert test!!";
    //     //save()--》有打才會儲存
    //     $post->save();
    // });

    //insert get value
        Route::get('insert/{title}/{fulltext}', function($title, $fulltext){
        $post = new Post;

        $post->title="$title";
        $post->fulltext="$fulltext";
        //save()--》有打才會儲存
        $post->save();
    });

    //20170525
    //create
    Route::get('create', function(){
        Post::create([
                'title'=>"hi create",
                'fulltext'=>"hello create"
        ]);
    });



    //20170525
    //update
    Route::get('update/{id}/{title}/{fulltext}', function($id, $title, $fulltext){
        // $post=Post::find($id);

        // $post->title="$title";
        // $post->fulltext="$fulltext";
        // $post->save();

       Post::where('id', $id)->where('is_admin', 0)
            ->update([
                'title'=>$title,
                'fulltext'=>$fulltext
            ]); 
    });

    //delete
    Route::get('delete/{id}', function($id){
        $post =Post::find($id);
        $post->delete();
        //Post::destory([1,3,5]);
    });



    //20170608
    Route::get('user/{userid}/post', function($userid) {
        //
        return User::find($userid)->post->title;
        // echo User::find($userid)->post->title . "<br/>\n";
    });

    Route::get('post/{postid}/user', function($postid) {
        //
        return Post::find($postid)->user->name;
        // echo User::find($userid)->post->title . "<br/>\n";
    });

    //hasMany
    Route::get('user/{userid}/posts', function($userid) {
        //
        // return User::find($userid)->posts->title;
        $user = User::find($userid);
        foreach ($user->posts as $post) {
            # code...
            echo $post->title. "<br>\n";
        }
    });

    Route::get('user/{userid}/role', function($userid){
        //取用roles屬性
        // $user = User::find($userid);
        // echo $user->name . "您的權限為：<br>\n";
        // foreach ($user->roles as $role){
        //     echo $role->name . "<br/>\n";
        // }

        //另一種寫法，呼叫roles（）method
        $role = User::find($userid)->roles()->orderBy('id','desc')->get();
        return $role;
    });

    Route::get('role/{roleid}/user', function($roleid) {
        //
        $users = Role::find($roleid)
            ->users()
            ->orderBy('id', 'asc')
            ->get();
            return $users;
    });