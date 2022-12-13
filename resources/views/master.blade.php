<!DOCTYPE html>
<html lang='id'>

<head>
  <title>@yield('title')</title>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link href='{{asset("css/bootstrap.min.css")}}' rel='stylesheet'>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <script src='{{asset("js/bootstrap.bundle.min.js")}}'></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <!-- <script src="static/js/jquery.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
  <link rel="stylesheet" href="static/css/AdminLTE.min.css" />
</head>

<style>
  body {
    background-attachment: local;
    background-image: url("assets/img/pola.png");
    backdrop-filter: blur(25px);
    background-repeat: no-repeat;
    background-size: cover;
  }

  .material-symbols-outlined {
    font-variation-settings:
      'FILL'0,
      'wght'400,
      'GRAD'0,
      'opsz'48
  }

  header {
    font-family: 'Montserrat', sans-serif;
  }

  main {
    font-family: 'Cormorant Garamond', serif;
  }

  .card-img-top {
    width: 100%;
    /* height: 15vw; */
    /* object-fit: none; */
  }
</style>

<body>
  <header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark p-4">
      <div class="container">
        <a class="navbar-brand" href="/">
          <img src="{{asset('assets/images/garudalogo.png')}}" alt="garudalaptop" style="vertical-align: middle"
            width="18%">
          <div class="d-inline-block" style="vertical-align: middle; font-size: 1.1em;">GARUDA LAPTOP
          </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown" style="font-size: 0.9em">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><span
                  class="material-symbols-outlined" style="vertical-align: middle; font-size: 1.3em;">
                  database
                </span> DATA</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/admin">Data Admin</a></li>
                <li><a class="dropdown-item" href="/pembeli">Data Pembeli</a></li>
                <li><a class="dropdown-item" href="/penjualan">Data Penjualan</a></li>
                <li><a class="dropdown-item" href="/laptop">Data Laptop</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown" style="font-size: 0.9em">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><span
                  class="material-symbols-outlined" style="vertical-align: middle; font-size: 1.3em;">
                  lab_profile
                </span> LAPORAN & REKAPILUTASI</a>
              <ul class="dropdown-menu">
                <h4 class="card-header bg-dark text-white" style="font-size: 1.1em"><b>LAPORAN</b></h4>
                <li><a class="dropdown-item" href="/lap1">Laporan Pembelian Per-Pembeli</a></li>
                <li><a class="dropdown-item" href="/lap2">Laporan Lama Pegawai Bekerja (Tahun)</a></li>
                <li><a class="dropdown-item" href="/lap3">Laporan Jumlah Pembelian Per-BulanTahun</a></li>
                <li><a class="dropdown-item" href="/lap4">Laporan Jumlah Penjualan Per-Transaksi</a></li>
                <li>
                  <hr class="dropdown-divider">
                </li>
                <h4 class="card-header bg-dark text-white" style="font-size: 1.1em"><b>REKAP LAPORAN</b></h4>
                <li><a class="dropdown-item" href="/lap5">Rekap Penjualan Per-Laptop</a></li>
                <li><a class="dropdown-item" href="/lap6">Rekap Penjualan Per-Pegawai</a></li>
                <li><a class="dropdown-item" href="/lap7">Rekap Transaksi Per-Metode Pembayaran</a></li>
                <li><a class="dropdown-item" href="/lap8">Rekap Jumlah Transaksi Per-Pembeli</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  </header>

  <main>
    <div class="container mt-3 mb-2">
      @if(Session::has('pesan'))
      <div class="alert alert-danger">
        {{Session::get('pesan')}}</div>
      @endif
    </div>
    @yield('content')
  </main>
  <footer>
    <div class="container-fluid bg-dark py-4 text-white mt-4 p-3">
      <div class="container text-center">
        <small class="text-center"><span class="material-symbols-outlined"
            style="vertical-align: middle; font-size: 1.2em">
            code
          </span> Created by Yosef Adrian - 2020130002</small>
        <form action="{{url('logout')}}" method="GET" id="logForm">
          <div class="d-grid gap-3 mt-4 mb-3">
            <button type="submit" value="logout" class="btn btn-danger">Logout</button>
          </div>
        </form>
      </div>
    </div>
  </footer>
</body>

</html>