<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded =[];
  	 public function user(){
    	return $this->belongsTo(User::class);
    }
    public function comments(){
      return $this->hasMany(PublicComments::class)->orderBy('created_at', 'DESC');
    }
}
