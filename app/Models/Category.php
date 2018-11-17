<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $table = "categories";
    public $timestamps = false;
    protected $guarded = array();

    public function posts()
    {
        return $this->hasMany('posts');
    }
    public function users()
    {
        return $this->belongsToMany('App\Models\User' , 'usercats','catId', 'userId');

    }
}
