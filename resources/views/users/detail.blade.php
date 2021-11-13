@extends('layout.users.layout2')

@section('title', 'Detail Profile')


@section('mainContent')

<div class="backberanda ml-auto">
    <a href="/beranda">Kembali ke beranda</a>
</div>  

<center>
<div class="detailprofil" style="margin-bottom: 70px;">

		<div>
		<img src="/img/profile.png" width="200px" height="200px">
		</div>

	<div class="detailbio">



		<div class="bio">
			Nama: {{ $user->nama }}
			<br>
			Email: {{ $user->email }}
			<br>	
			Jenis Kelamin: {{ $user->jenis_kelamin }}
			<br>
			TTL: {{ $user->ttl }}
			<br>
			Alamat: {{ $user->alamat }}
			<br>
			No HP: {{ $user->no_hp }}
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
