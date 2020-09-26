<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable,Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_name','avatar', 'name', 'email', 'password',
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

    public function timeline()
    {
        $ids = $this->follows()->pluck('id');

        return Tweety::WhereIn('user_id', $ids)
            ->orWhere('user_id', $this->id)
            ->withLikes()
            ->latest()
            ->paginate(50);
    }

    public function tweets()
    {
        return $this->hasMany(Tweety::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    
    //Laravel 7以下使用 Auth()方法默認搜尋id更改為搜尋SELECT''資料表欄位
    /*public function getRouteKeyName()
    {
        return 'name';  
    }*/

    public function path($append='')
    {
        $path = route('profile',$this->user_name);
        return $append ? "{$path}/{$append}" : $path;
    }
}
