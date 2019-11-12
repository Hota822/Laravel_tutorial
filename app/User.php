<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','activated', 'activation_digest',
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

    // accessor
    // public function getNameAttibute()
    // {
    //     return self::name;
    // }

    public function microposts()
    {
        return $this->hasMany('App\Micropost')
                    ->orderBy('updated_at', 'desc');
    }

    public function followers()
    {
        return $this->belongsToMany('App\User', 'relationships', 'followed_id', 'follower_id');
    }

    public function following()
    {
        return $this->belongsToMany('App\User', 'relationships', 'follower_id', 'followed_id');
    }

    public function alreadyFollowed($other_user)
    {
        return !empty($this->following->where('id', $other_user->id)->count());
    }

    public function follow($other_user)
    {
        \DB::table('relationships')->insert([
            'follower_id' => $this->id,
            'followed_id' => $other_user->id,
        ]);
    }

    public function unfollow($other_user)
    {
        \DB::table('relationships')->where([
            ['follower_id' , $this->id],
            ['followed_id' , $other_user->id],
        ])->delete();
    }

    public function feed()
    {
        $user_id = $this->id;
        return  $this->hasMany('App\Micropost')
                     ->where('user_id', $user_id)
                     ->orWhereIn(
                         'user_id',
                         function ($query) use ($user_id) {
                             $query->select('followed_id')
                                   ->from('relationships')
                                   ->where('follower_id', $user_id);
                         }
                     )
                     ->orderByDesc('updated_at');
    }
}
