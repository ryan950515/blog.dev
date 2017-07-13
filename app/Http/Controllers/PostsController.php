<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
//20170525
use App\Post;
//20170608
use App\User;
use App\Role;
use App\Country;
use App\Photo;
use App\Taggable;
use App\Tag;

class PostsController extends Controller
{
	
	/**
	* Display a listing of the resource.
	     *
	     * @return \Illuminate\Http\Response
	     */
	    // 	public function index($id, $name)
	    // 	{
		// 		//
		// 		return "HelloWorld, ID :". $id. "name is : ". $name;
		//
	
	
	public function index()
	    {
		//
		// return "HelloWorld";
		//20170713
		$posts = Post::all();
		// dd($posts);
		//return $posts;
		return view("posts.index", compact("posts"));
	}
	
	/**
	* Show the form for creating a new resource.
	     *
	     * @return \Illuminate\Http\Response
	     */
	    public function create()
	    {
		//
		// return ("This is CREATE 測試");
		//20170713
		return view("posts.create");
	}
	
	
	/**
	* Store a newly created resource in storage.
	     *
	     * @param  \Illuminate\Http\Request  $request
	     * @return \Illuminate\Http\Response
	     */
	    public function store(Request $request)
	    {
		//20170713
		// return $request->all();
		//取欄位
		// return $request->get("title");
		//取屬性
		// return $request->title;

		//存入資料表
		Post::create($request->all());
		return redirect("/posts");

	}
	
	
	/**
	* Display the specified resource.
	     *
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function show($id)
	    {
		//20170713
		//只找一筆findOrFail
		$post = Post::findOrFail($id);
		return view('posts.show', compact('post'));
	}
	
	
	/**
	* Show the form for editing the specified resource.
	     *
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function edit($id)
	    {
		 //20170713
		$post = Post::findOrFail($id);
		return view('posts.edit', compact('post'));
	}
	
	
	/**
	* Update the specified resource in storage.
	     *
	     * @param  \Illuminate\Http\Request  $request
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function update(Request $request, $id)
	    {
		//
			$post = Post::findOrFail($id);
			$post->update($request->all());

			return redirect("/posts");
	}
	
	
	/**
	* Remove the specified resource from storage.
	     *
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function destroy($id)
	    {
		//	
			$post = Post::findOrFail($id);
			$post->delete();

			return redirect("/posts");
	}
	
	public function showContact(){
        $imba =["珍娜","老陳"];
    
        return view("contact",compact("imba"));    
		// return view('contact');
		// 		return view('errors.503');
	}
	
	public function showPost($id){
		// 		return view('post')->with('id',$id);
		return view('post',compact('id'));
	}
	
    // 儘量使用原生的compact方法來處理
	public function showPostCategory($category,$date,$id){
		// 		return view('post')->with('id',$id);
		return view('post',compact('category','date','id'));
		// 		$data = array(
		                // 		'category'=>$category,
		                // 		'date'=>$date,
		                // 		'id'=>$id
		                // 		);
		// 		return view('post')->with(array(
		            // 		'category'=>$category,
		            // 		'date'=>$date,
		            // 		'id'=>$id
		            // 		));
		
	}
	
	
}
