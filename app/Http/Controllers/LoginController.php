<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
    	return view('account.login');
    }

    public function authenticate(Request $request)
    {
    	$credentials = $request->validate([

    		'email' => 'required|email:dns',
    		'password' => 'required'

    	],
    	[

    		'email.required' => 'Email wajib di isi',
    		'email.email' => 'Harap masukan email sesuai dengan formatnya',
    		'password.required' => 'Password wajib di isi'

    	]);

    	if(Auth::attempt($credentials)){
    		$request->session()->regenerate();
    		return redirect()->intended('/beranda');
    	}

    	return back()->with('loginError', 'Login gagal');

    }


    public function logout(Request $request)
    {
    	Auth::logout();

    	$request->session()->invalidate();
    	$request->session()->regenerateToken();

    	return redirect('/login');

    }
}
