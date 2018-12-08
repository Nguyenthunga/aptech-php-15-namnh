<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index', ['users'=> $users]);
    }
    public function show($id){
        $user = User::find($id);
        return view('users.show', ['user'=> $user]);
    }
    public function create(){
        return view('users.create');
    }
    public function store(Request $request){
        User::create([
            'name' => $request ->name,
            'email' => $request ->email,
            'password' => $request ->password,
        ]);
        return redirect()->route('users.index');
    }
    public function destroy($id){
        User::destroy($id);
        return redirect()->route('users.index');
    }
    public function edit($id){
        $user = User::find($id);
        return view('users.edit', ['user' => $user]);
    }
    public function update(Request $request, $id){
        $user = User::find($id);
    
        $user -> update([
            'name' => $request ->name,
            'email' => $request ->email,
            'password' => $request ->password,
        ]);
        return redirect()->route('users.show', $id);
    }
}
