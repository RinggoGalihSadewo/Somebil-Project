<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Status;
use App\Models\Comment;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        date_default_timezone_set("Asia/Jakarta");
        $jkt = date("d-m-Y H:i:s");

        $status = Status::latest()->Paginate(5);
        $usersRandom = User::get()->random(5);
     
      
        return view('users.beranda', compact('status', 'jkt'), compact('usersRandom'));

    }

    public function search(Request $request)
    {

        $cari = $request->nama;
        $usersRandom = User::get()->random(5);
        $cariTeman = User::where('nama','like','%'.$cari.'%')->paginate(5);

        return view('users.cari', compact('cariTeman'), compact('usersRandom'));
    }

    public function detail(User $user)
    {
        return view('users.detail', compact('user'));
    }

    public function myProfile()
    {
        $users = User::get();
        return view('users.profile', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //

        date_default_timezone_set("Asia/Jakarta");
        $jkt = date("d/m/Y H:i:s");

        $status = $request->validate([

            'isi_status' => 'required',
            'nama' => 'required',
            'user_id' => 'required',
            'created_at' => $jkt,
            'updated_at' => $jkt
        ],
        [
            'isi_status.required' => "Anda belum memasukan Status hari ini"
        ]);

        Status::create($status);

        return redirect('/beranda')->with('createdStatus', 'Berhasil membuat Status');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  User $user)
    {
        
            $request->validate([

            'nama' => 'required',
            'email' => 'required|email:dns|unique:users',
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
            'alamat.required' => 'Alamat wajib di isi',
            'alamat.max' => 'Alamat yang di masukan tidak boleh lebih dari 255 kata',
            'ttl.required' => 'Tempat dan tanggal lahir wajib di isi',
            'jenis_kelamin.required' => 'Pilih jenis kelamin',
            'no_hp.required' => 'No Hp wajib di isi',
            'no_hp.numeric' => 'Harap masukan angka',
            // 'no_hp.min' => 'Harap masukan minimal 8 angka',
            // 'no_hp.size' => 'No Hp tidak boleh lebih dari 13 angka'
  
        ]);

        User::where('id', $user->id)
            ->update([

                'nama' => $request->nama,
                'email' => $request->email,
                'alamat' => $request->alamat,
                'ttl' => $request->ttl,
                'jenis_kelamin' => $request->jeniskelamin,
                'no_hp' => $request->nohp

            ]);    

        return redirect('/myprofile')->with('success', 'Berhasil mengubah data');    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
