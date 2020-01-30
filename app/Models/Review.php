<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function Kala()
    {
        return $this->hasMany('App\Models\Kala');
    }
    public function Users()
    {
        return $this->hasMany('App\Models\Users');
    }
}
