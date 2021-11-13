@extends('layout.users.layout')

@section('title', 'Cari teman')

@section('recFriend')

    <p class="text-center">
        Mungkin orang yang anda kenal
    </p>

    @foreach($usersRandom as $randomFriend)

    <div class="teman1 d-flex">
        <img src="/img/profile.png" width="50" height="50px">
        <p>{{ $randomFriend->nama }}</p>
    </div>

    <hr color="#35B1AA" class="mt-4">

    @endforeach

@endsection


@section('mainContent')

<center>

<div class="hsearch mt-5">
	<b>Hasil pencarian</b>
</div>
</center>
    
@foreach($cariTeman as $user)
<center>
<div class="pencarian mt-5">



		<div class="profilteman d-flex">
            <img src="/img/profile.png" width="100px" height="100px">
            <div class="bio">
            {{ $user->nama }}
            <br>
          	{{ $user->jenis_kelamin }}
          	<br>
            {{ $user->alamat }}
            </div>
        </div>

        
        <div class="d-flex mt-4">
		 <div class="ml-auto">
            <a href="/detail/{{ $user->id }}">
		 <button type="submit" class="btn btnStyle text-white">Detail</button>
            </a>
		 </div>
     


</div>
</center>
@endforeach

<!-- <center>

<div class="pencarian mt-5">

		<div class="profilteman d-flex">
            <img src="/img/profile.png" width="100px" height="100px">
            <div class="bio">
            Ringgo Galih Sadewo
            <br>
          	Laki - laki
          	<br>
            Blok D4 No.11
            </div>
        </div>


        <div class="d-flex mt-4">
		 <div class="ml-auto">
		 <button type="submit" class="btn btnStyle text-white">Detail</button>
		 </div>


</div>
</center>

<center>

<div class="pencarian mt-5">

		<div class="profilteman d-flex">
            <img src="/img/profile.png" width="100px" height="100px">
            <div class="bio">
            Ringgo Galih Sadewo
            <br>
          	Laki - laki
          	<br>
            Blok D4 No.11
            </div>
        </div>


        <div class="d-flex mt-4">
		 <div class="ml-auto">
		 <button type="submit" class="btn btnStyle text-white">Detail</button>
		 </div>


</div>
</center>
 -->
@endsection
<center>
<div class="pagination mt-4">
    {{ $cariTeman->links() }}
</div>
</center>