<?php

namespace App\Http\Controllers;

use App\User;
use App\Profile;
use App\Post;
use App\PublicComments;

use Illuminate\Http\Request;

class PostsController extends Controller
{
	  public function index(Post $post){
	  	//dd($post);
      $comments=PublicComments::where('post_id', $post->id)
               ->orderBy('created_at', 'desc')
               ->get();
     // dd($comments);
	  	return view('posts.index', compact('post','comments'));
	  }
    public function create(User $user){
    	$this->authorize('update', $user->profile);
    	return view('posts.create', compact('user'));
    }
    public function store(){
    	$data = request()->validate([
          'category'=>['string','required'],
          'title'=> 'required',
          'body'=>['required', 'min:20'],
   	]);
   	auth()->user()->posts()->create($data);

   	return redirect('/admin/profile/'. auth()->user()->id);
    }

    public function edit(Post $post)
    {
      return view('posts.edit', compact('post'));
    }

    public function save_edit(Post $post)
    {
      $data = request()->validate([
          'category'=>['string','required'],
          'title'=> 'required',
          'body'=>['required', 'min:20'],
    ]);
      if (auth()->user()->id!=$post->user_id) {
        return redirect('/admin/profile/'. auth()->user()->id)->with('error','Error accesing post data');
      }
      $post->update($data);
      return redirect('/admin/profile/'. auth()->user()->id);

    }

    public function delete(Post $post)
    {
       $post->delete();
       return redirect('/admin/profile/'. auth()->user()->id);
    }

    public function actions(Post $post)
    {
      $user=auth()->user();
      if ($post->user_id!=$user->id) {
        return redirect('/admin/profile/'. auth()->user()->id)->with('error','Error accesing post data');
      }
      
      return view('profile.actionCenter', compact('post','user'));
    }

}
