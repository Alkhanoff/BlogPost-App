<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    protected $fillable = [
        'email','isNew','fullname','password','remember_token'
    ];

    protected $table = "users";
    public $timestamps = false;
    protected $guarded = array();

    public function posts()
    {
        return $this->hasMany('posts');
    }
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category' , 'usercats','userId', 'catId');

    }
}
