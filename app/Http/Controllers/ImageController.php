<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ImageController extends Controller
{
	public function __construct()
	{
		return $this->middleware('auth');
	}
    public function index(User $user)
    {
    	return view('admin.photo', compact('user'));
    }

    public function store(User $user)
    {
    if (auth()->user()==$user) {
    	//get their old photo 
    	$oldPhoto=$user->image->photo;    	

    	$data=request()->validate([
    		'photo'=>['required',['image'],'mimes:jpeg,jpg,png','max:5000'],
    	]);
    	$imagePath=request('photo')->store('profile', 'public');
    	/* $image=Image::make(public_path("storage/{$imagePath}"))->fit(1000, 1000);
    	$image->save(); */
    	//check if using defaultimage
    	if ($oldPhoto=="default.png") {
    		//store the new photo
    		$user->image->photo=$imagePath;
    		$user->image->save();
    	}else{
    		//delete the old photo;
    		unlink(public_path("storage/{$oldPhoto}"));
    		//store new photo
    		$user->image->photo=$imagePath;
    		$user->image->save();

    	}
    }

    return redirect('/admin/profile/'.$user->id)->with('success','Profile Photo Updated Successfuly');
    }
}
