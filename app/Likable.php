<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;

trait Likable
{
    public function scopeWithLikes(Builder $query)
    {
        $query->leftJoinSub(
            'SELECT tweety_id, SUM(liked) likes, SUM(!liked) dislikes FROM `likes` GROUP BY tweety_id',
            'likes',
            'likes.tweety_id',
            'tweeties.id'
        );
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function like($user = null , $liked = true)
    {
        $this->likes()->updateOrCreate(
            ['user_id' => $user ? $user->id : auth()->id()],
            ['liked' => $liked]
        );
    }

    public function dislike($user = null)
    {
        return $this -> like($user,false);
    }

    public function isLikeBy(User $user)
    {
        return (bool) 
        $user->likes
             ->where('tweety_id',$this->id)
             ->where('liked',true)
             ->count();
    }

    public function DisLikeBy(User $user)
    {
        return (bool) 
        $user->likes
             ->where('tweety_id',$this->id)
             ->where('liked',false)
             ->count();
    }
}