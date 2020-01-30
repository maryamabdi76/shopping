<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class LogController extends Controller
{
    public function login(){
        return view('login/login');
    }
    public function validateForm(Request $request){
        $request->validate([
            'username'=>'required|max:255|unique:users,username',
            'password'=>'required:min:6'
        ]);

        $form=new Users();  //sakhte objecte jadval
        $form->username=$request->post('username');
        $form->password=$request->post('password');
        $form->ldate=time();

        $form->save();
        return redirect('login')->with('success','user has been added');
        // return view('register.index');
    }
}
