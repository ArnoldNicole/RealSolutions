<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class PublicTutorialsController extends Controller
{
    public function index()
    {
    	return view('publicTutorials.index');
    }
    public function store(){
    	$data=request()->validate([
    		'email'=>['required','string','max:25','email','unique:students'],
    		'level'=>['required','string'],
    		'language'=>['required','string'],
    		'fullname'=>['required','string','max:50','unique:students'],
    	]);
    	
    	Student::create($data);
    	return redirect()->back()->with('success','Request Received. Please check your email for further communication');
    }


    public function show()
    {
        $students=Student::all();
        return view('publicTutorials.show',compact('students'));
    }
}
