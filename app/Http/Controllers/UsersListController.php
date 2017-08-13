<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;
use App\Http\Controllers\Controller;



class UsersListController extends Controller
{
    public function view()
    {
//        $User = user::orderBy('created','desc')->paginate(8);
        $users = User::all();
//dd($users);


        return view('/admin.users', ['users' => $users ]);
    }
}
