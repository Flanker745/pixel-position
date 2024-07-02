<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function create()
    {
        return view("auth.login");
    }
    public function store(Request $request)
    {
        $attributes = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if (!Auth::attempt($attributes)){
            throw ValidationException::withMessages([
                "email" => "Your credentials are incorrect",
            ]);
        }
        $request->session()->regenerate();
        return redirect("/");
    }
    public function destroy(){
        Auth::logout();
        return redirect("/");
    }
}