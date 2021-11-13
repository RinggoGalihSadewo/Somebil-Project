@extends('layout.users.layout2')

@section('title', 'My Profile')


@section('mainContent')

<div class="backberanda ml-auto">
    <a href="/beranda">Kembali ke beranda</a>
</div>  

<center>
<div class="detailprofil" style="margin-bottom: 70px;">

	<div class="detailbio">

        @if(session()->has('success'))
        <div class="alert alert-warning alert-dismissible fade show text-white" role="alert" style="background-color: #35B1AA;">
          {{ session('success') }}  
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif   

<!-- 		<div>
		<img src="/img/profile.png" width="100%" height="100px">
		</div> -->



		<div class="bio">

			<form action="/myprofile" method="post">

                @method('patch')
                @csrf

            <div class="text-center">
            <img src="/img/profile.png" width="200px" height="200px">
            </div>    

            <div class="form-group row">
                <label for="nama" class="col-sm-12 col-form-label">Nama</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="nama" name="nama" value="{{ auth()->user()->nama }}" disabled>
                </div>
            </div>

            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-12 col-form-label">Email</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="inputEmail3" name="email" value="{{ auth()->user()->email }}" disabled>
                </div>
            </div>

            <div class="form-group row">
                <label for="alamat" class="col-sm-12 col-form-label">Alamat</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="alamat" name="alamat" value="{{ auth()->user()->alamat }}" disabled>
                </div>
            </div>

            <div class="form-group row">
                <label for="ttl" class="col-sm-12 col-form-label">TTL</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="ttl" name="ttl" value="{{ auth()->user()->ttl }}" disabled>
                </div>
            </div>

            <div class="form-group row">
                <label for="ttl" class="col-sm-12 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="ttl" name="ttl" value="{{ auth()->user()->jenis_kelamin }}" disabled>
                </div>
            </div>            

<!--             <div class="form-group row">
                <label for="ttl" class="col-sm-12 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-12">
                  <select class="custom-select" id="inputGroupSelect01" name="jeniskelamin" >
                    <option selected>{{ auth()->user()->jenis_kelamin }}</option>
                    <option value="Laki - laki">Laki - laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
            </div> -->

            <div class="form-group row">
                <label for="nohp" class="col-sm-12 col-form-label">No. Hp</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" id="nohp" name="nohp" value="{{ auth()->user()->no_hp }}" disabled> 
                </div>
            </div>

            <br>

            <center>
<!--             <button type="submit" class="btn btnStyle text-white mb-3 ml-auto">
                Ubah data
            </button> -->
            </center>                                                            
        </form>

		</div>
		
	</div>
	
</div>
</center>

<!-- <center>
<div class="statusdetail mt-5">

		 <div class="profilteman d-flex">
            <img src="/img/profile.png" width="80px" height="80px">
            <p>Ringgo Galih Sadewo</p>
        </div>

        <div class="statusteman text-left mt-3">
        	<p>Hari ini turun hujan...</p>
        </div>

		<div class="d-flex mt-4">
		 	<button type="submit" class="btn btnStyle text-white">Komentar</button>
		<div class="ml-auto">
 			<p class="mt-2">6 Agustus 2021</p>
		</div>
		</div>

	
</div>
</center>

<center>
<div class="statusdetail mt-5">

		 <div class="profilteman d-flex">
            <img src="/img/profile.png" width="80px" height="80px">
            <p>Ringgo Galih Sadewo</p>
        </div>

        <div class="statusteman text-left mt-3">
        	<p>Hari ini turun hujan...</p>
        </div>

		<div class="d-flex mt-4">
		 	<button type="submit" class="btn btnStyle text-white">Komentar</button>
		<div class="ml-auto">
 			<p class="mt-2">6 Agustus 2021</p>
		</div>
		</div>

	
</div>
</center> -->

@endsection
