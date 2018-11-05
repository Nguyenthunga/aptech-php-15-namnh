<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function hello()
    {
        $users = DB::table('users')->get();
        // $roles = DB::table('roles')->get();
        return view('welcome', ['users' => $users]);
    }

    public function index()
    {
        $users = DB::table('users')->get();
        return view('index', ['users' => $users]);
    }
}
