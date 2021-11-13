<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DaftarController extends Controller
{
    //

    public function index()
    {
    	return view('account.daftar');
    }

    public function store(Request $request)
    {



    	$validatedData = $request->validate([

    		'nama' => 'required',
    		'email' => 'required|email:dns|unique:users',
    		'password' => 'required|min:8|max:30',
    		'alamat' => 'required|max:255',
    		'ttl' => 'required',
    		'jenis_kelamin' => 'required',
    		'no_hp' => 'required|numeric'

    	],
    	[

    		'nama.required' => 'Nama wajib di isi',
    		'email.required' => 'Email wajib di isi',
    		'email.email' => 'Harap masukan email sesuai dengan formatnya',
    		'email.unique' => 'Email sudah pernah digunakan',
    		'password.required' => 'Password wajib di isi',
    		'password.min' => 'Harap masukan minimal 8 kata',
    		'password.max' => 'Password yang di masukan tidak boleh lebih dari 30 kata',
    		'alamat.required' => 'Alamat wajib di isi',
    		'alamat.max' => 'Alamat yang di masukan tidak boleh lebih dari 255 kata',
    		'ttl.required' => 'Tempat dan tanggal lahir wajib di isi',
    		'jenis_kelamin.required' => 'Pilih jenis kelamin',
    		'no_hp.required' => 'No Hp wajib di isi',
    		'no_hp.numeric' => 'Harap masukan angka',
    		// 'no_hp.min' => 'Harap masukan minimal 8 angka',
    		// 'no_hp.size' => 'No Hp tidak boleh lebih dari 13 angka'
  
    	]);


    	$validatedData['password'] = bcrypt($validatedData['password']);


    	User::create($validatedData);
    
    	return redirect('/login')->with('success', 'Pendaftaran akun berhasil, silahkan login');

    }

}
