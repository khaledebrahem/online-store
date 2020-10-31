<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Http\Requests\loginRequest;
use App\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }
    public function login(loginRequest $request)
    {
        //make validation

        if (auth()->attempt($request->only('email','password'))){
            if(auth()->user()->type == 'admin')
            return redirect('dashboard');
        else return redirect(request('redirect_url') ? request('redirect_url') : '/');
        }
    }

    public function registerForm()
    {
        return view('auth.register');
    }

    public function registerPost(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255',
            'email'=>'required|unique:users,email|max:255',
            'password'=>'required|confirmed'
        ]);

        $inputs = $request->all();
        $inputs['type'] = 'client';
        $user = User::create($inputs);
        auth()->loginUsingId($user->id);
        return redirect(request('redirect_url') ? request('redirect_url') : '/');
    }

    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
