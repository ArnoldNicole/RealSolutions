<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HelpContact;
use App\User;
use App\Post;

class AdminController extends Controller
{
    public function index()
    {
    	$messages=HelpContact::paginate(15);
    	$users=User::all();
        $posts=Post::paginate(7);
    	// dd($messages);
    	return view('admin.index', compact('messages','users','posts'));
    }
    public function show()
    {
    	$messages=HelpContact::paginate(5);
    	$users=User::all();
    	return view('admin.messages', compact('messages','users'));
    }
    public function delete(HelpContact $id){
    	//dd($id);
    	$id->delete();
    	return redirect()->back();
    }
}
