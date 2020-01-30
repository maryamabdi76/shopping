<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kala extends Model
{
    public $table="kala";
    public $timestamps=false;
    public function Category()
    {
        return $this->belongsTo('App\Models\Category','categoryid','id');
    }
    public function Sail()
    {
        return $this->hasOne('App\Models\Sail');
    }
    public function Images()
    {
        return $this->hasMany('App\Models\Images');
    }
    public function Review()
    {
        return $this->belongsTo('App\Models\Review');
    }
    public function Factor()
    {
        return $this->belongsToMany('App\Models\Factor', 'FactorKala', 'kalaid', 'factorid');
    }
}
