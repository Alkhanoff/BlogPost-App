<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Admin extends Authenticatable
{
    protected $table = "admin";
    public $timestamps = false;
    protected $guarded = array();
}
