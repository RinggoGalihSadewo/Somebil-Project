<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- My Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="/css/layout/style.css">

    <!-- Faticon -->
    <link rel="icon" type="image/png" sizes="13x27" href="/img/faticon.png">    

    <title>@yield('title')</title>
  </head>
  <body>

    <!-- Navbar -->

    <nav class="container-fluid navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #35B1AA;" data-aos="slide-down">

    <a class="navbar-brand" href="{{ url('/beranda') }}"><img src="/img/logo3.png" width="300vh"></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> 

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
        <li>
        <form class="search form-inline my-2 my-lg-0 col-sm-12" method="get" action="/cari">

          @csrf  
            
          <input class="form-control mr-sm-2" type="search" placeholder="Cari teman" aria-label="Search" name="nama">
          <button class="btn my-2 my-sm-0" type="submit"><i class="fas fa-search text-white"></i></button>
        
        </form>
        </li>
        <li>
            <div class="iconnav d-flex ml-sm-5 ml-3 mt-2">
                <a href="/myprofile">
                    <i class="fas fa-user text-white"><div class="d-sm-none ml-3 d-inline text-white">{{ auth()->user()->nama }}</div></i>
                </a>
            </div>
        </li>
        <li>
            <div class="iconnav d-flex ml-3 mt-2">
                <a href="/logout">
                    <i class="fas fa-sign-out-alt text-white"><div class="d-sm-none ml-3 d-inline text-white">Logout</div></i>
                </a>
            </div>
        </li>  
        <!-- <div class="container-fluid">
          <li class="nav-item">
            <div class="fotoProfile">
                
            </div>
          </li>
          <li class="nav-item dropdown">
            <div class="nama ml-3">
                test
            </div>
          </li>
          </div> -->
        </ul>
      </div>
    </nav>




        <div class="mainContent bg-transparent" data-aos="slide-down">

            @yield('mainContent')

        </div>


    


    <!-- Footer -->

    <div class="footer">

        <div class="social-media">
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

        <div class="develope ml-5 mt-sm-5 mt-4">

            <div class="logo1 d-sm-none">
            <img src="/img/logofooter.png">
            </div>
            <img src="/img/linefooter.png">
            <p>Develop by: Ringgo</p>
            <p><a href="">ringgo.118140076@student.itera.ac.id</a></p>
            <p>Contact: 083177117265</p>
            <p class="d-sm-none">Download for android:<a href="https://bit.ly/DownloadSoMeBil" target="_blank"> bit.ly/DownloadSoMeBil</a></p>
        </div>

        <div class="download ml-auto">
            <div class="logo1">
            <img src="/img/logofooter.png">
            </div>
            <div class="linkdownload">
            <p>Download Social Media Bilabong for Android</p>
            <div class="android d-flex">
                <img src="/img/androidfooter.png">
                <p class="ml-4 mt-3"><a href="https://bit.ly/DownloadSoMeBil" target="_blank">bit.ly/DownloadSoMeBil</a></p>
            </div>
            </div>
        </div>
        </div>    
        
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

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/b31044d5db.js" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>