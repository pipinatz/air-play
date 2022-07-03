<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Member extends Authenticatable
{
    use HasFactory, Notifiable;

        /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'members';

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public $timestamps = false;

    public function Forum(){
        return $this->hasMany('App\Models\Forum');
    }

    public function Comment(){
        return $this->hasMany('App\Models\Comment');
    }

    public function Review(){
        return $this->hasMany('App\Models\Review');
    }

}
