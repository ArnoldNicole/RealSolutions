<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','securitycode',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected static function boot(){
    parent::boot();

    static::created(function ($user){
        $user->profile()->create([
            'title'=>$user->username,
        ]);
        $user->image()->create([
            'photo'=>'/profile/Ss4u2iRko8CRiz28apmF4ZyReXIr7IaDy68ZElOd.jpeg',
        ]);
        });
    }
     public function profile(){
        return $this->hasOne(Profile::class);
    }
    public function posts(){
      return $this->hasMany(Post::class)->orderBy('created_at', 'DESC');
    }

    /**
     * A user can have many messages
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function messages()
    {
      return $this->hasMany(Message::class);
    }

    public function news()
    {
       return $this->hasMany(News::class);  
    }
    public function image()
    {
        return $this->hasOne(Photo::class);
    }
}
