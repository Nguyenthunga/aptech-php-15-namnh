<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // lay tat ca nguoi dung
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    // lay mot nguoi dung
    public function show($id)
    {
        // dd($id);
        $user = User::find($id);
        return view('users.show', ['user' => $user]);
    }

    // xoa nguoi dung dua tren id
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('users.index');
    }

    // hien thi form tao nguoi dung moi
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        // dd($request->name);
        // $name = $request->name;

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('users.index');
    }

    // form sua du lieu
    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', ['user' => $user]);
    }

    // cap nhat du lieu
    public function update($id, Request $request)
    {
        // dd($request->all());
        $user = User::find($id);
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('users.show', $id);
    }

}
