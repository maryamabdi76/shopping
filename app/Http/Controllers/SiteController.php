<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class SiteController extends Controller
{
    public function getall(){
        // $allusers=Users::all();
        $allusers=Users::with('Genders')->get();
        return view('all')->with('all',$allusers);
    }
    public function update($id){
        $userinfo=Users::find($id);
        return view('update')->with('userinfo',$userinfo);
    }
    public function delete($id){
        $user=Users::find($id);
        $user->delete();
        return redirect('all')->with('users',Users::all());
    }

    public function validateUpdate(Request $request){
        $request->validate([
            'username'=>['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'gender'=>['required'],
            'mobile'=>['required','numeric','digits:11']
        ]);

        $id=$request->id;
        $form=Users::find($id);
        $form->name=$request->post('name');
        $form->username=$request->post('username');
        $form->email=$request->post('email');
        $form->mobile=$request->post('mobile');
        // $form->role=$request->post('role');
        $form->gender=$request->post('gender');
        $form->save();
        return redirect('all')->with('users',Users::all());
    }
}
