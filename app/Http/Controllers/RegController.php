<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;

class RegController extends Controller
{

    public function register(){
        // $genders = Gender::all();
        // return view('register/index', compact('genders'));
        return view('register/register');
    }
    public function validateForm(Request $request){
        $request->validate([
            'fullname'=>'required|string|max:255',
            'username'=>'required|max:255|unique:users,username',
            'mail'=>'required|email|unique:users,mail',
            'mobile'=>'required|numeric|digits:11',
            'gender'=>'required',
            'password'=>'required:min:6',
            'confirmpassword'=>'required|min:6|same:password',
        ]);

        $form=new Users();  //sakhte objecte jadval
        $form->fullname=$request->post('fullname');   //fullname sutune jadvale
        $form->username=$request->post('username');
        $form->mail=$request->post('mail');
        $form->mobile=$request->post('mobile');
        $form->password=$request->post('password');
        $form->gender=$request->post('gender');
        $form->rdate=time();
        $form->ldate=time();

        $form->save();
        return redirect('register')->with('success','user has been added');
        // return view('register.index');
    }
}
