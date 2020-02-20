<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Models\Users;
use App\Models\Role;
use App\Models\Gender;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use DataTables;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=Users::with('Role')->get();
        return view('admin.users.index')->with('users',$users);
    }

    public function alluserdatatables()
    {
        $users=User::all();
        return DataTables()->of($users)->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=array(
            'user'=>User::find($id),
            'gender'=>Gender::all(),
            'role'=>Role::all(),
        );
        return view('admin.users.edit')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->id);
        $id=$request->id;
        $form=User::find($id);
        $form->name=$request->post('name');
        $form->username=$request->post('username');
        $form->mobile=$request->post('mobile');
        $form->email=$request->post('email');
        $form->gender=$request->post('gender');
        // $form->role=$request->post('role');
        $form->save();
        return redirect('admin/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */

    // public function destroy(User $user)
    public function destroy($id)
    {

        $user = User::find($id);
        // if(Auth::user()->id != $user)
        $user->delete();
        return redirect('/admin/users');

        //    return Redirect::route('admin.users.index');
    //    }
    }
}
