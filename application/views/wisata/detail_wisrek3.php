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
      <h2>Detail Wisata Rekreasi 3</h2>
      <fieldset style="border:3px solid black;padding: 15px">
        <p>Galeri Foto Kampung 99 Pepohonan</p>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/kampungpepohonan.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/kampung99.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/kampung.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/99pepohonan.JPG" width="200px" height="140px">
            </div>
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/99pohon.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/kolamrenang.jpg" width="200px" height="140px">
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
            <p>Sebab Kampung ini dinamakan kampung 99 pepohonan karena filosofi desain tempat wisatanya yang di dominasi
              oleh pohon, namun, pohon yang berada di kampung ini, tidak tentu berjumlah 99. Dengan membayar Rp. 10.000,
              anda sudah bisa menikmati berbagai fasilitas yang telah kami sediakan yaitu, dua kolam renang, kantin,
              lapangan, berbagai permaian anak anak, mushola dan tempat wudhu, tempat penginapan untuk yang bermalam,
              parkiran, bagi yang membawa kendaraan pribadi, drumband, dan kamar mandi. Selain itu, anda juga bisa
              melakukan aktivitas tradisional yaitu, memerah susu kambing, berkuda, membajak sawah, dan memanen sayuran.
              Aktivitas tersebut mampu membuat anda bernostalgia secara menyenangkan.</p>
          </fieldset>
        </div>
        <div class="col-md-6">
          <fieldset style="border:3px solid black;padding: 15px">
            <h6>Alamat & Peta Lokasi</h6>
            <p>Jl. KH. Muhasan II, Meruyung, Limo, Meruyung, Kec. Limo, Kota Depok, Jawa Barat 16515.</p>
            <div class="embed-responsive embed-responsive-3by4"></div>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.0731040024043!2d106.76288671477002!3d-6.38456649538022!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ebfa8359437f%3A0x1417a0b336117a8c!2sKampung%2099%20Pepohonan!5e0!3m2!1sid!2sid!4v1611758381389!5m2!1sid!2sid"
              width="608" height="162" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
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
            <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/ayudia.jpg" width="200px" height="130px">
          </div>
          <div class="col-md-2">
            <h6>Ayudia Bing Slamet</h6>
            <p>Seru banget! berasa berpetualang kalo pergi kesini. kalo inget suasana kota jakarta, jadi ngga mau
              pulang!</p>
          </div>
          <div class="col-md-2">
            <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/pasha.jpg" width="200px" height="130px">
          </div>
          <div class="col-md-2">
            <h6>Pasha Ungu</h6>
            <p>Berkuda disini asik sekali. Sejuk, jadi ingat dengan kampung halaman. Saya ngga menemukan kesulitan dalam
              mencocokan selera saya disini.</p>
          </div>
          <div class="col-md-2">
            <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/angel.jpg" width="200px" height="130px">
          </div>
          <div class="col-md-2">
            <h6>Angel</h6>
            <p>Bercocok tanam disini sangat menyenangkan, apalagi ketika itu saya habis berenang. Meski lelah, tapi
              seru! bisa tau gimana cara menanam sayur.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr />
</body>

</html>