<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;

            /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'forums';

    public $timestamps = false;

    public function Member(){
        return $this->belongsTo('App\Models\Member', 'member_id');
    }

    public function Comment(){
        return $this->hasMany('App\Models\Comment');
    }
}
