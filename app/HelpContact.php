<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HelpContact extends Model
{
     protected $fillable = [
        'name', 'email', 'message',
    ];
}
