<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function loginView()
    {
        return view(
            'auth.login',
            ['pageTitle' => "Login"]
        );
    }

    public function loginProcess(LoginRequest $request)
    {

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('/import-file'); // Redirect to the page intended on successful login
        }

        return redirect("login")->with('failed', 'Login details are not valid');
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();

        return redirect('login');
    }
}
