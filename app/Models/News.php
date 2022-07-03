<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

                /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'news';

    public $timestamps = false;

    public function Admin(){
        return $this->belongsTo('App\Models\Admin', 'admin_id');
    }
}
