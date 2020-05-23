<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\News;

class NewsController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function edit()
    {
    	return view('admin.news');
    }

    public function store(User $user)
    {
    	$data=request()->validate([
    		'category'=>['required','string'],
    		'title'=>['required','string','min:10','unique:news'],
    		'body'=>['required','string']
    	]);
        //dd($data);
    	$save=$user->news()->create([
            'title'=>$data['title'],
            'body'=>$data['body'],
            'category'=>$data['category'],

        ]);
        if($save)
         {
            return redirect('/news');
         }
         else
         {
           return redirect()->back(); 
         }
        }
    	
}
