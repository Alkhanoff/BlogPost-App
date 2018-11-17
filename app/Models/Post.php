<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $table = "posts";
    public $timestamps = false;
    protected $guarded = array();
    protected $dates = ['deleted_at'];

    public function user()
    {
        return $this->belongsTo('App\Models\User',"userId","id");
    }

    public function category()
    {
        return $this->belongsTo('App\Models\Category',"catId","id");
    }
}
