<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    // public $timestamps = false;

    public function Genders()
    {
        return $this->belongsTo('App\Models\Gender','gender','id');
    }
    public function Role()
    {
        return $this->belongsToMany('App\Models\Role', 'userrole', 'userid', 'roleid');
    }
    public function Review()
    {
        return $this->belongsTo('App\Models\Review');
    }
    public function UserAddress()
    {
        return $this->hasMany('App\Models\UserAddress');
    }
    public function Support()
    {
        return $this->hasMany('App\Models\Support');
    }
    public function Factor()
    {
        return $this->hasMany('App\Models\Factor');
    }
    public function Wallet()
    {
        return $this->hasOne('App\Models\Wallet');
    }
}
