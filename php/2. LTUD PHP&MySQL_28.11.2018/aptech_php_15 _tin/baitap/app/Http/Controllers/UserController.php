<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('index' , ['users' => $users]);
    }
    public function show($id)
    {    
        $users = User::find($id);
        return view('show',['user'=>$users]);
    }
    function create(){
        return view('users.create');
    }
    function store(Request $request){
        $users = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->Password = $request->Password;
        $user->save();
        return redirect()->route('users.store');
    }
    function destroy($id){
        $users= User::destroy($id);
        return redirect('index');
    }
    function edit($id){
        $user = User::find($id);
        return view('edit', ['user' => $user]);
    }
    function update(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->Password = $request->Password;
        $user->save();
        return redirect()->route('user.index');
    }
}
