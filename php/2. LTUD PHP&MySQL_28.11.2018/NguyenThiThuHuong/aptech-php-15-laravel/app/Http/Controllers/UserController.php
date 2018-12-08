<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function index(){
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }
    public function show($id){
        $user = User::find($id);
        return view('users.show', ['user' => $user]);
    }
    public function destroy($id)
    {
        $user = User::destroy($id);
        
        return redirect()->route('users.index');
    }
    public function create()
    {
        return view('users.create');
    }
    // function luu tru nguoi dung
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        // $user = DB::table('users')->insert([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'password' => $request->password,
        // ]);
        return redirect('/users');
    }
    public function edit($id)
    {
        $users = User::find($id);
        return view('users.edit', ['users' => $users]);
    }
   
    public  function update(Request $request,$id){
        $user = User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->save();
        return redirect('/users');
    }
}
