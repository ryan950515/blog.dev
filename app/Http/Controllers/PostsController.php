<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
		return "HelloWorld";
	}
	
	/**
	* Show the form for creating a new resource.
	     *
	     * @return \Illuminate\Http\Response
	     */
	    public function create()
	    {
		//
		return ("This is CREATE 測試");
	}
	
	
	/**
	* Store a newly created resource in storage.
	     *
	     * @param  \Illuminate\Http\Request  $request
	     * @return \Illuminate\Http\Response
	     */
	    public function store(Request $request)
	    {
		//
	}
	
	
	/**
	* Display the specified resource.
	     *
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function show($id)
	    {
		//
	}
	
	
	/**
	* Show the form for editing the specified resource.
	     *
	     * @param  int  $id
	     * @return \Illuminate\Http\Response
	     */
	    public function edit($id)
	    {
		//
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
