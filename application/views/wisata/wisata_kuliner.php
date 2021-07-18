<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required Meta Tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--Bootstrap CSS-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Detail Wisata Rekreasi</title>
</head>

<body>
  
  <h1 align="center">Sistem Informasi Wisata Kota Depok - SIWIKODE</h1>
  <br>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?php echo base_url()?>index.php/welcome/index">Home</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url()?>index.php/welcome/wisrek">Wisata Rekreasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?php echo base_url()?>index.php/welcome/wiskul">Wisata Kuliner</a>
          </li>
        </ul>
        <span class="navbar-text">
          <a class="nav-link" href="<?=base_url()?>index.php/login/login">Login</a>
        </span>
      </div>
    </div>
  </nav><br>

  <div class="mt-4">
    <div class="col-md-12">
      <h4>Daftar Wisata Kuliner Kota Depok</h4>
      <fieldset style="border:3px solid black;padding: 15px">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/jacob.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-10">
              <h6>Jacob Koffie Huis</h6>
              <p>Jacob Koffie Huis yang sengaja di desain instagramable untuk anda yang hobi berfoto bersama teman
                ataupun keluarga anda sekaligus menikmati sajian yang kami berikan. Tersedia Indoor dan outdor untuk
                anda yang ingin mengganti suasana. Jacob Koffie yang mengusung tagar #ngopidirumah ini setiap jengkalnya
                ditata berbeda.</p>
              <a href="<?php echo base_url()?>index.php/welcome/jelas1">Detail</a>
            </div>
          </div>
      </fieldset>
    </div>
  </div>
  <div class="mt-4">
    <div class="col-md-12">
      <fieldset style="border:3px solid black;padding: 15px">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/warunkupnormal.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-10">
              <h6>Warunk Upnormal</h6>
              <p>Warunk Upnormal terdiri dari tiga lantai. Untuk Anda yang ingin menikmati pemandangan alam dengan
                sentuhan angin sepoi-sepoi, tempat ini menyediakan ruangan terbuka di lantai dua. Namun jangan khawatir,
                ada pula ruangan bebas asap rokok. Mengenai fasilitas, Warunk Upnormal menyediakan Wi-Fi kencang dan
                dapat diakses oleh pengunjung.</p>
              <a href="<?php echo base_url()?>index.php/welcome/jelas2">Detail</a>
            </div>
          </div>
      </fieldset>
    </div>
  </div>
  <div class="mt-4">
    <div class="col-md-12">
      <fieldset style="border:3px solid black;padding: 15px">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/OI_.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-10">
              <h6>Ol' Pops Coffee</h6>
              <p>Tempat Ol' Pops Coffee adalah cafe shop yang sangat instagramable dengan banyak barang antik. Tempat
                ini memiliki beberapa bagian seperti barista workshop, grandma's terace, grandpa's wherhouse, serta
                taman di bagian samping. coffe shop ini tidak selalu menghadirkan vintage, melainkan dipadukan dengan
                zaman sekarang.</p>
              <a href="<?php echo base_url()?>index.php/welcome/jelas3">Detail</a>
            </div>
          </div>
      </fieldset>
    </div>
  </div>