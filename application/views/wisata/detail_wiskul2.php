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
      <h2>Detail Wisata Kuliner 2</h2>
      <fieldset style="border:3px solid black;padding: 15px">
        <p> Galeri Foto Warunk Upnormal</p>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/warunkupnormal.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/interior9.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/warunk.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/upnormal.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/tempatnongkrong.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/thumbnail-2.jpg" width="200px" height="140px">
      </fieldset>
    </div>
  </div>
  <div class="mt-4">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-6">
          <fieldset style="border:3px solid black;padding: 15px">
            <h6>Deskripsi Fasilitas</h6>
            <p>Warunk Upnormal terdiri dari tiga lantai. Untuk Anda yang ingin menikmati pemandangan alam dengan
              sentuhan angin sepoi-sepoi, tempat ini menyediakan ruangan terbuka di lantai dua. Namun jangan khawatir,
              ada pula ruangan bebas asap rokok. Mengenai fasilitas, Warunk Upnormal menyediakan Wi-Fi kencang dan dapat
              diakses oleh pengunjung. Tersedia pula mushola bagi pengunjung yang ingin beribadah. Ketika anda bersama
              dengan keluarga, kami juga menyediakan beberapa mainan yang mengasyikan. Selain itu, bagi anda yang tak
              mau melewatkan momen, pada setiap sudut warunk upnormal, dapat dijadikan objek foto anda.</p>
          </fieldset>
        </div>
        <div class="col-md-6">
          <fieldset style="border:3px solid black;padding: 15px">
            <h6>Alamat & Peta Lokasi</h6>
            <p>Jl. Margonda Raya No.458, Pondok Cina, Kecamatan Beji, Kota Depok, Jawa Barat 16424.</p>
            <div class="embed-responsive embed-responsive-3by4"></div>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.2259811055496!2d106.83185591476989!3d-6.364793495394293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec16b7ca8c59%3A0xf33a585f253513c8!2sWarunk%20Upnormal%20Margonda!5e0!3m2!1sid!2sid!4v1611824370251!5m2!1sid!2sid"
              width="608" height="138" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
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
            <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/billy.jpg" width="200px" height="130px">
          </div>
          <div class="col-md-2">
            <h6>Billy Davidson</h6>
            <p>Nasi bakso sambal konsletnya yumm! Aku demen bgt bakso sapi goreng pake sambel begini, comfort food bgt
              pake nasi anget.</p>
          </div>
          <div class="col-md-2">
            <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/jokowi.jpg" width="200px" height="130px">
          </div>
          <div class="col-md-2">
            <h6>Joko Widodo</h6>
            <p>Tempatnya selalu ramai, luar biasa sekali dengan tempat ini, Nunggunya juga ga terlalu lama, service
              cukup cepat.</p>
          </div>
          <div class="col-md-2">
            <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/Zayn.jpg" width="200px" height="130px">
          </div>
          <div class="col-md-2">
            <h6>Zayn</h6>
            <p>Jualan utama Upnormal adalah tempat yang nyaman sekali dengan harga makanan yang murah. Well, Upnormal
              Cikutra aku beri nilai 82 untuk itu.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr />


</body>

</html>