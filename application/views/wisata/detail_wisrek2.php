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

  <div class="col-md-12">
    <div class="mt-4">
      <h2>Detail Wisata Rekreasi 2</h2>
      <fieldset style="border:3px solid black;padding: 15px">
        <p>Galeri Foto Taman Bunga Wiladatika</p>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/tamanbunga.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/wiladatikataman.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/bunga.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/taman.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/terowongan.png" width="200px" height="140px">
            </div>
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/rumahkeong.jpg" width="200px" height="140px">
            </div>
          </div>
        </div>
    </div>
    </fieldset>
  </div>
  </div>
  <div class="mt-4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <fieldset style="border:3px solid black;padding: 15px">
            <h6>Deskripsi Fasilitas</h6>
            <p>Taman bunga wiladatika dibangun dilahan luas dan dilengkapi beragam fasilitas. fasilitas tersebut
              diantaranya, berbagai macam taman yaitu, taman kelinci, taman bermain dan taman jamur. selain itu,
              terdapat gedung serba guna, gazebo, kolam renang, dan wahana permainan anak. Tak hanya anak, orang dewasa
              juga dapat menikmati fasilitas seperti wahana air. contohnya, bola air, perahu air, dan becak mini. Anda
              juga dapat melakukan outbond dan paintball dengan melakukan reservasi terlebih dahulu. Jika ingin
              menggelar acara, pada taman wiladatika juga disediakan beragam gedung pertemuan. wisatawan yang ingin
              menginap juga disediakan penginapan dengan berbagai pilihan. Nikmati momen bersama keluarga anda pada
              fasilitas yang telah kami berikan.</p>
          </fieldset>
        </div>
        <div class="col-md-6">
          <fieldset style="border:3px solid black;padding: 15px">
            <h6>Alamat & Peta Lokasi</h6>
            <p>Jl. Jambore No.1, Harjamukti, Kec. Cimanggis, Kota Depok, Jawa Barat 13720.</p>
            <div class="embed-responsive embed-responsive-3by4"></div>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.184227070564!2d106.89113831476999!3d-6.370199995390443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69eca341d5feeb%3A0x1475ebc18101ced!2sTaman%20Rekreasi%20Wiladatika!5e0!3m2!1sid!2sid!4v1611755436611!5m2!1sid!2sid"
              width="608" height="186" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
              tabindex="0"></iframe>
          </fieldset>
        </div>
      </div>
    </div>
  </div>
  <div class="mt-4">
    <h5 align="center">Testimoni & Komentar</h5>
    <div class="mt-4">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">
            <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/dinda.jpg" width="200px" height="130px">
          </div>
          <div class="col-md-2">
            <h6>Dinda Hauw</h6>
            <p>Rumah keong yang unik mampu buat aku bernostalgia lagi ke masa kecil. Permainan perahu airnya juga asik,
              seneng bisa sempetin diri buat dateng kesana.</p>
          </div>
          <div class="col-md-2">
            <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/lucky.jpg" width="200px" height="130px">
          </div>
          <div class="col-md-2">
            <h6>Lucky Hakim</h6>
            <p>Danau yang digabungkan dengan hamparan rumput hijau membuat udara semakin sejuk walaupun air sedikit
              keruh. Asik juga menemani anak bermain ke taman bunga.</p>
          </div>
          <div class="col-md-2">
            <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/kacamata.jpg" width="200px" height="130px">
          </div>
          <div class="col-md-2">
            <h6>Anggini</h6>
            <p>Awalnya hanya ingin menemani adik berenang disana, tapi bosen, terus jalan muterin taman bunga, tapi
              malah keterusan ambil foto. bunganya lucu banget!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr />
</body>

</html>