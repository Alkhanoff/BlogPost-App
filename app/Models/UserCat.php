<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class UserCat extends Pivot
{
    protected $table = "usercats";
    public $timestamps = false;
    protected $guarded = array();
}
