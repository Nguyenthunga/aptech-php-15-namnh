<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // function index -> lay tat ca nguoi dung
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    // function show -> lay du lieu 1 nguoi
    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', ['user' => $user]);
    }

    // function destroy => xoa du lieu nguoi dung dua tren id cua ho
    public function destroy($id)
    {
        User::destroy($id);
        return 'xoa thanh cong !';
    }

    // function form them nguoi dung
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

        return $user;
    }

}
