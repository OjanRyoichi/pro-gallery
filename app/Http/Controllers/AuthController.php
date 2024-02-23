<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function signin()
    {
        $user = User::where('username', request('username'))->first();

        if (!$user) {
            session()->flash('gagal', 'Username or password invalid');
            return back();
        }

        $data = [
            'username' => request('username'),
            'password' => request('password')
        ];

        if (Auth::attempt($data)) {
            request()->session()->regenerate();
            return redirect()->intended();
        } else {
            session()->flash('gagal', 'Username or password invalid');
            return back();
        }
    }

    public function signup()
    {
        $data = [
            'username' => request('username'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'namaLengkap' => request('namaLengkap'),
            'alamat' => request('alamat')
        ];

        if (User::create($data)) {
            session()->flash('success', 'Register Successfully');
            return redirect('/signin');
        } else {
            session()->flash('gagal', 'Register UnSuccessfully');
            return redirect('/signup');
        }
    }

    public function signout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/signin');
    }
}
