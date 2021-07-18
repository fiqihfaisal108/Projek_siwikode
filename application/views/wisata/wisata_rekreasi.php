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
      <h4>Daftar Wisata Rekreasi Kota Depok</h4>
      <fieldset style="border:3px solid black;padding: 15px">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/kubahmasdepok.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-10">
              <h6>Masjid Kubah Mas</h6>
              <p>Masjid dengan gaya timur tengah ini diresmikan pada bulan desember 2006. Masjid ini mempunyai kubah
                berlapis emas yang melambangkan rukun islam. Tak hanya tempat ibadah, disana juga terdapat toko makanan
                dan butik. Yang gemar berfoto, juga bisa mengimplementasikan hobinya disini.</p>
              <a href="<?php echo base_url()?>index.php/welcome/detail1">Detail</a>
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
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/wiladatika.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-10">
              <h6>Taman Bunga Wiladatika</h6>
              <p>Taman bunga wiladatika dibangun dilahan luas dan dilengkapi beragam fasilitas. fasilitas tersebut
                diantaranya, berbagai macam taman yaitu, taman kelinci, taman bermain dan taman jamur. selain itu,
                terdapat gedung serba guna, gazebo, kolam renang, dan wahana permainan anak. </p>
              <a href="<?php echo base_url()?>index.php/welcome/detail2">Detail</a>
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
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/kampung99.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-10">
              <h6>Kampung 99 Pepohonan</h6>
              <p>Sebab Kampung ini dinamakan kampung 99 pepohonan karena filosofi desain tempat wisatanya yang di
                dominasi oleh pohon, namun, pohon yang berada di kampung ini, tidak tentu berjumlah 99. Dengan membayar
                Rp. 10.000, anda sudah bisa menikmati berbagai fasilitas yang telah kami sediakan yaitu, dua kolam
                renang, kantin dan lapangan.</p>
              <a href="<?php echo base_url()?>index.php/welcome/detail3">Detail</a>
            </div>
          </div>
      </fieldset>
    </div>
  </div>