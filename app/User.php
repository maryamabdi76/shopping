<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username','name', 'email', 'gender', 'mobile', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

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
        return $this->hasMany('App\Models\Review','id','userid');
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
    public function isAdmin(){
        if(isset($this->Roles[0])&& $this->Roles[0]->name=="Admin"){
            return true;
        }else{
            return false;
        }
    }

    public function isUser(){
        if(isset($this->Roles[0])&& $this->Roles[0]->name=="User"){
            return true;
        }else{
            return false;
        }
    }
    public function hasRole($rolename){
        $roles=$this->Role()->get();
        foreach($roles as $role)
        {
            if($role->name ==$rolename)
            {
                return true;
            }
        }
        return false;
    }

}
