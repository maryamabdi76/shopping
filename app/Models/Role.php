<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $table='role';
    public function Users()
    {
        return $this->belongsToMany('App\Models\Users', 'userrole', 'roleid', 'userid');
    }
    public function Permission()
    {
        return $this->hasOne('App\Models\Permission');
    }
}
