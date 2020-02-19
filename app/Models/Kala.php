<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kala extends Model
{
    public $table="kala";
    // public $timestamps=false;
    use SoftDeletes;
    protected $date = ["deleted_at"];
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
        return $this->hasMany('App\Models\Review','id','kalaid');
    }
    public function Factor()
    {
        return $this->belongsToMany('App\Models\Factor', 'FactorKala', 'kalaid', 'factorid');
    }
}
