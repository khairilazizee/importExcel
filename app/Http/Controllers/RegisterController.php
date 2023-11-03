<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function registerView()
    {
        return view('auth.register', [
            'pageTitle' => 'Register'
        ]);
    }

    public function registerProcess(RegisterRequest $request)
    {   
        // dd('fuck you');
        $users = User::create([
            'name' => trim($request->name),
            'email' => strtolower($request->email),
            'password'=> Hash::make($request->password)
        ]);
        // auth()->login($user);

        return redirect('login')->with('success', 'User have been created. Please login.');
    }
}
