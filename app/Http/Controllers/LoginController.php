<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function logout()
    {
        Auth::logout(Auth::user());
        return redirect()->route('welcome')->with('success', "Tizimga muoffaqiyatli chiqdingiz");
    }

    public function checkLogin(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:10'
        ]);

        $user = User::where('email', $validate['email'])->first();

        if ($user && Hash::check($validate['password'], $user->password)) {
            Auth::login($user);
            return redirect()->route('welcome')->with('success', "Tizimga muoffaqiyatli kirdingiz");
        }

        return back()->with('error', "Email yoki parolingiz noto'g'ri");
    }


    public function writeRegister(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|string|max:32',
            'email' => 'required|email',
            'password' => 'required|min:5|max:10'
        ]);

        $user = User::create($validate);
        Auth::login($user);
        return redirect()->route('welcome')->with('success', "Tizimga muoffaqiyatli kirdingiz");
    }
}
