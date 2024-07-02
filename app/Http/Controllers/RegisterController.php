<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        $userValidation =   $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
        ]);
        $employerValidation =   $request->validate([
            "employer" => 'required',
            "logo" => ["required", File::types(["png", "jpg", "jpeg"])],
        ]);
        $user =  User::create($userValidation);
        $logoPath = $request->logo->store("logos");
        $user->employer()->create([
            "name" => $employerValidation['employer'],
            "logo" => $logoPath,
        ]);
        Auth::login($user);
        return redirect('/');
    }
}
