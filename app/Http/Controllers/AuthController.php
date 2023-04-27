<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $auth = auth()->attempt([
            'username' => $request->username,
            'password' => $request->password,
        ]);

        if(!$auth)
        {
            return redirect('login')->withErrors('Wrong Credentials');
        }

        $request->session()->regenerate();
        return redirect('/');
    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/');
    }

    public function register(Request $request)
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'name'=>'required',
            'username'=>'required',
            'password'=>'required',
        ]);

        $validated_data['password'] = Hash::make($request->password);
        $user = User::create($validated_data);

        auth()->login($user);
        return redirect('/');
    }
}
