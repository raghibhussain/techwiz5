<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $Users = User::all();
        return view('pages.Admin.Users.All', [
            'title' => 'All Users',
            'Users' => $Users
        ]);
    }


    public function addUser()
    {
        return view(
            "Pages.Admin.Users.Add",
            [
                'title' => 'Add User'
            ]
        );
    }
}
