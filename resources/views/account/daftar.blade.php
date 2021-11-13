<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="/css/landingpages.css">

    <!-- My Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Faticon -->
    <link rel="icon" type="image/png" sizes="32x32" href="/img/faticon.png">

    <title>Daftar Account</title>

  </head>
  <body>
    
    <!-- Navbar -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top" data-aos="slide-down">
      <a class="navbar-brand" href="{{ url('/') }}"><img src="/img/logo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item ml-sm-4 ml-0 mt-sm-0 mt-3"> 
            <a class="btn-daftar nav-link button text-white" href="{{ url('/login') }}" style="overflow-y: hidden;">Login</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="daftar" data-aos="fade-left">
        <p class="text-center" style="color: #35B1AA;">Daftar Account</p>
        <br>
        <form action="/daftar" method="post">

            @csrf

            <div class="form-group row">
                <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">

                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                </div>
            </div>



            <div class="form-group row">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control @error('email') is-invalid @enderror" id="inputEmail3" name="email" value="{{ old('email') }}">

                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                </div>
            </div>

            <div class="form-group row">
                <label for="pw" class="col-sm-3 col-form-label">Password</label>
                <div class="col-sm-9">
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="pw" name="password" value="{{ old('password') }}">

                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                </div>
            </div>

            <div class="form-group row">
                <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" value="{{ old('alamat') }}">

                @error('alamat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                </div>
            </div>

            <div class="form-group row">
                <label for="ttl" class="col-sm-3 col-form-label">TTL</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control @error('ttl') is-invalid @enderror" id="ttl" name="ttl" value="{{ old('ttl') }}">
                
                @error('ttl')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                </div>
            </div>

            <div class="form-group row">
                <label for="ttl" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-9">
                  <select class="custom-select" id="inputGroupSelect01" name="jenis_kelamin">
                    <option value="Laki - laki">Laki - laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="nohp" class="col-sm-3 col-form-label">No. Hp</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="nohp" name="no_hp" value="{{ old('no_hp') }}">

                @error('no_hp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

                </div>
            </div>

            <br>

            <center>
            <button type="submit" class="btn btn-daftar text-white">
                Daftar
            </button>

            </center>                                                            
        </form>

        <center>
            <div class="footerform mt-4">
            <p>Sudah punya akun ? yuk <a href="/login"><u>Login</u></a></p>
            </div>
        </center>

    </div>        

    <!-- Social Media -->
    <div class="social-media" data-aos="fade-up">
        <div class="row">
            <div class="col">
        <a href="https://www.instagram.com/ringgo.gs" target="_blank">
        <div class="ig">
            <img class="mb-2" src="/img/instagram.png" height="30" width="30">
        </div>
        </a>
        <a href="">
        <div class="fb">
            <img class="mb-2" src="/img/fb.png" height="30" width="30">
        </div>
        </a>
        <a href="">
        <div class="tw">
            <img class="mb-2" src="/img/twitter.png" height="30" width="30">
        </div>
        </a>
        <a href="whatsapp://send?text=Halo Ringgo, saya salah satu pengguna Somebil&phone=+6283177117265">
        <div class="wa">
            <img class="mb-2" src="/img/whatsapp.png" height="30" width="30">
        </div>
        </a>
        <a href="https://bit.ly/DownloadSoMeBil" target="_blank">
        <div class="ad">
            <img class="mb-2" src="/img/android.png" height="30" width="30">
        </div>
        </a>
        </div>
        </div>
    </div>

    <!-- Slider -->

<!--     <div id="carouselExampleSlidesOnly" class="slider carousel slide" data-ride="carousel">   
      <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/bg2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/img/bg3.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="/img/bg4.png" class="d-block w-100" alt="...">
        </div>
      </div>
    </div> -->

    <!-- Background video -->
    <div class="fullscreen-bg">
            <video loop muted autoplay poster="/img/bg5.png" class="fullscreen-bg__video">
                <source src="/video/Tak berjudul 1_1080p_2.mp4" type="video/mp4">
            </video>
    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Aos -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            delay: 500,
            duration: 800, 
        });
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>