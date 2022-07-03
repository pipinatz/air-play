<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

                /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'games';

    public $timestamps = false;

    public function Member(){
        return $this->belongsTo('App\Models\Member', 'member_id');
    }

    public function Review(){
        return $this->hasMany('App\Models\Review');
    }
}
