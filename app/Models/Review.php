<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

                /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'reviews';

    public $timestamps = false;

    public function Game(){
        return $this->belongsTo('App\Models\Game', 'game_id');
    }


    public function Member(){
        return $this->belongsTo('App\Models\Member', 'member_id');
    }
}
