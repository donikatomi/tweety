<?php

namespace App;

use App\Tweet;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
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

    public function getAvatarAtribute()
    {
        return "https://i.pravatar.cc/200?u=" . $this->email;
    }

    public function timeline()
    {
        $friends = $this->follows()->pluck('id');
        // $friends->push($this->id); == orWhere
        return Tweet::whereIn('user_id', $friends)->orWhere('user_id',$this->id)->latest()->get();
    }

    public function tweets()
    {
        return $this->hasMany(Tweet::class);
    }

    // Followable

    // public function getRouteKeyName()
    // {
    //     return 'name';
    // }
}
