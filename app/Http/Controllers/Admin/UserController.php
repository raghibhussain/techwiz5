<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\currencyExchange;
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
        $currency = currencyExchange::select('base')->distinct()->get();

        return view(
            "Pages.Admin.Users.Add",
            [
                'title' => 'Add User',
                'currencies' => $currency
            ]
        );
    }

    public function AddUserPost(Request $req)
    {
        $validate = $req->validate([
            'Username' => 'required|string',
            'FirstName' => 'required|string',
            'LastName' => 'required|string',
            'Email' => 'required|string',
            'Phone' => 'required|string',
            'currency' => 'required|string'
        ], [
            'Username.required' => 'Please Enter Username',
            'FirstName.required' => 'Please Enter First Name',
            'LastName.required' => 'Please Enter LastName Name',
            'Email.required' => 'Please Enter Email Address',
            'Phone.required' => 'Please Enter Phone',
            'currency.required' => 'Please Enter currency',
        ]);

        $user = new User;
        $user->username = $validate['Username'];
        $user->FirstName = $validate['FirstName'];
        $user->LastName = $validate['LastName'];
        $user->email = $validate['Email'];
        $user->phone = $validate['Phone'];
        $user->currency_preference = $validate['currency'];
        $user->password = bcrypt('Password');
        $user->save();

        return redirect()->back()->with(['success' => 'User Created Successfully']);
    }
}
