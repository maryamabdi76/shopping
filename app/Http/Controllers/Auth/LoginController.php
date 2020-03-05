<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Users;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');

    }
    // protected function redirectto()
    // {
    //     $id = auth()->user()->id;
    //     $user=Users::find($id);
    //     foreach($user->role as $role)
    //     if($role->name=='Admin'){
    //         $this->redirectTo='home';
    //         return $this->redirectTo;
    //     }elseif($role->name=='User'){
    //         $this->redirectTo='profile';
    //         return $this->redirectTo;
    //     }
    //     abort(403);

    //     // else{
    //     //     $this->redirectTo='/profile';
    //     //     return $this->redirectTo;
    //     // }
    // }
}
