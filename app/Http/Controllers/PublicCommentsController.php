<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PublicComments;
use App\Post;

class PublicCommentsController extends Controller
{
    public function store(Post $post){
    	//dd($post);
    	$data=request()->validate([
    		'name'=>['string','required'],
    		'email'=>['email','required'],
    		'comment'=>['string','min:10','required']
    	]);
    	$post->comments()->create($data);
    	return redirect()->back();
    }
}
