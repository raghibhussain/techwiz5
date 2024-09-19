<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getLoginPage()
    {
        return view('Auth.Login');
    }

    public function getRegisterPage()
    {
        return view('Auth.Register');
    }

    public function RegisterUser(Request $req)
    {
        $validate = $req->validate(
            [
                'FirstName' => 'required|string',
                'LastName' => 'required|string',
                'username' => 'required|string|unique:users,username',
                'email' => 'required|email|unique:users,email',
                'phone' => 'required|string|unique:users,phone',
                'password' => 'required|string|same:c_password|min:8',
                'acceptance' => 'required|accepted'
            ],
            [
                'FirstName.required' => 'Please enter your first name.',
                'FirstName.string' => 'First name must be a valid string.',
                'LastName.required' => 'Please enter your last name.',
                'LastName.string' => 'Last name must be a valid string.',
                'username.required' => 'Username is required.',
                'username.unique' => 'This username is already taken.',
                'email.required' => 'Email address is required.',
                'email.unique' => 'This email is already in use.',
                'phone.required' => 'Phone number is required.',
                'phone.string' => 'Phone number must be a valid.',
                'phone.unique' => 'This phone number is already in use.',
                'password.required' => 'Password is required.',
                'password.string' => 'Password must be a valid string.',
                'password.same' => 'Passwords do not match.',
                'password.min' => 'Password must be at least 8 characters.',
                'acceptance.required' => 'Please accept the terms and conditions.',
                'acceptance.accepted' => 'You must accept the terms and conditions.'
            ]
        );

        $User = new User;
        $User->FirstName = $validate['FirstName'];
        $User->LastName = $validate['LastName'];
        $User->username = $validate['username'];
        $User->email = $validate['email'];
        $User->phone = $validate['phone'];
        $User->password = bcrypt($validate['password']);
        $User->save();

        return redirect()->route('Auth.login')->with(['Success' => 'You Have Been Registered Successfully. Please Login.']);
    }

    public function LoginUser(Request $req)
    {
        $credentials = $req->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();

            return redirect()->route('pages.dashboard')->with(['success' => 'Login Success']);
        }

        return redirect()->back()->with(['error' => 'Either username or password is wrong. Please try again.']);
    }

    public function getProfilePage()
    {
        return view('pages.profile', [
            'title' => 'Profile'
        ]);
    }
}
