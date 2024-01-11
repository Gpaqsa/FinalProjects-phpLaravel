<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function loadRegister () 
    {
        return view('register');
    }

    public function studentRegister (Request $request)
    {
        $request->validate([
            'name'=>'string|required|min:2',
            'email' => 'string|required|max:100|unique:users',
            'password' => 'string|required|min:6',
        ]);

        $user = new User();

        $user -> name = $request->name;
        $user -> email= $request->email;
        $user -> password= $request->password;
        $user->save();

        Session::put("success", "შენ წარმატებით დარეგისტრირდი");
        return redirect("/");
    }

    // public function loadLogin()
    // {
    //     return view('/login');
    // }

    public function userLogin (Request $request)
    {
        $request->validate([
            'email'=> 'string|required|email',
            'password' => 'string|required',
        ]);

       $userCredential =  $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect()->intended('/'); // This redirects to the intended page or '/' if not set
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ]);
    }
}
