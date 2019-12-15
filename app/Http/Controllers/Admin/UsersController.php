<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Redirect,Response,DB,Config;
use Datatables;

class UsersController extends Controller
{
    public function index()
    {
        return view('users');
    }
    public function usersList()
    {
        $users = DB::table('users')->select('*');
        return datatables()->of($users)
            ->make(true);
    }
}
