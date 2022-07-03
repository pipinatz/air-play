<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

                /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'comments';

    public $timestamps = false;

    public function Forum(){
        return $this->belongsTo('App\Models\Forum', 'forum_id');
    }


    public function Member(){
        return $this->belongsTo('App\Models\Member', 'member_id');
    }
}
