<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    public function Factor()
    {
        return $this->hasMany('App\Models\Factor');
    }
}
