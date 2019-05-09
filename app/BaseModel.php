<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

abstract BaseModel extends Model
{
    protected $guarded = [];
}
