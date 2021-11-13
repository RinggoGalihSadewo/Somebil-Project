@extends('layout.users.layout')

@section('title', 'Beranda')

@section('recFriend')

    <p class="text-center">
        Mungkin orang yang anda kenal
    </p>

	@foreach($usersRandom as $randomFriend)

    <a href="/detail/{{$randomFriend->id}}">
    <div class="teman1 d-flex">
        <img src="/img/profile.png" width="50" height="50px">
        <p>{{ $randomFriend->nama }}</p>
    </div>
    </a>

    <hr color="#35B1AA" class="mt-4">

    @endforeach

@endsection

@section('mainContent')                 
   
<center>
<div class="status">

	<form  action="/beranda" method="post">

		 @csrf

        @if(session()->has('createdStatus'))
        <div class="alert alert-warning alert-dismissible fade show text-white" role="alert" style="background-color: #35B1AA;">
          {{ session('createdStatus') }}  
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif

 		 <div class="form-group">
 		 	<input type="hidden" name="user_id" value="{{ auth()->user()->id }}" class="form-control text-dark">

 		 	<input type="hidden" name="nama" value="{{ auth()->user()->nama }}" class="form-control text-dark">


		    <textarea class="form-control @error('isi_status') is-invalid outline-danger @enderror" id="exampleFormControlTextarea1" rows="5" placeholder="Buat status mu hari ini" style="border-color: #35B1AA;" name="isi_status" value="{{ old('isi_status') }}"></textarea>

		    @error('isi_status')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
 		 	@enderror
		 </div>

		 <div class="d-flex mt-4">
		 <p class="mt-2">{{ $jkt }}</p>
		 <div class="ml-auto">
		 <button type="submit" class="btn btnStylebuat">Buat</button>
		 </div>
		 </div>
	</form>
	
</div>
</center>

@foreach($status as $data_status)


    <center>
	<div class="status mt-5">


	<div class="profilteman d-flex">
        <img src="/img/profile.png" width="80px" height="80px">
        <p>{{ $data_status->nama }}</p>
    </div>

    <div class="statusteman text-left mt-3 ml-2">
    	<p>{{ $data_status->isi_status }}</p>
    </div>

    <div class="d-flex mt-4">
<!-- 	 	<button type="submit" class="btn btnStyle text-white">Komentar</button> -->
	<div class="ml-auto">
		<p class="mt-2">{{ $data_status->created_at}}</p>
	</div>
	</div>
	</div>
	</center>



@endforeach
<center>
<div class="pagination mt-4">
	{{ $status->links() }}
</div>
</center>
<!-- <center>
<div class="status mt-5">

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
<div class="status mt-5">

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
<div class="status mt-5">

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