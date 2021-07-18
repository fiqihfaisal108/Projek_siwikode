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
      <h2>Detail Wisata Kuliner 3</h2>
      <fieldset style="border:3px solid black;padding: 15px">
        <p> Galeri Foto Ol' Pops Coffee</p>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/OI'.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/pops.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/coffe.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/pops2.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/pops3.png" width="200px" height="140px">
            </div>
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/pops4.jpg" width="200px" height="140px">
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
            <p>Tempat Ol' Pops Coffee adalah cafe shop yang sangat instagramable dengan banyak barang antik. Tempat ini
              memiliki beberapa bagian seperti barista workshop, grandma's terace, grandpa's wherhouse, serta taman di
              bagian samping. coffe shop ini tidak selalu menghadirkan vintage, melainkan dipadukan dengan zaman
              sekarang. Pada granpa's wherhouse terdapat koleksi barang antik seperti, sepeda ontel, mesin ketik dan
              bangku-bangku tua yang mampu membuat anda bernostalgia pada rumah kakek, begitupun dengan grandma's terace
              yang sengaja dihadirkan pajangan antik.</p>
          </fieldset>
        </div>
        <div class="col-md-6">
          <fieldset style="border:3px solid black;padding: 15px">
            <h6>Alamat & Peta Lokasi</h6>
            <p>Jl. Pendidikan No.77, Cinangka, Kec. Sawangan, Kota Depok, Jawa Barat 16516.</p>
            <div class="embed-responsive embed-responsive-3by4"></div>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.1476895196956!2d106.75702671476995!3d-6.37492729538708!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ef43b1c8c5b9%3A0x21f42a7fd7f175a8!2sOl%E2%80%99%20Pops%20Coffee%20Cinangka!5e0!3m2!1sid!2sid!4v1611823459479!5m2!1sid!2sid"
              width="608" height="137" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
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
            <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/citrakirana.jpg" width="200px" height="130px">
          </div>
          <div class="col-md-2">
            <h6>Citra Kirana</h6>
            <p>Nongkrong2 cantik disini nyaman banget! Tempatnya unik dan bikin betah buat berlama lama disini. Caramel
              macchiato yang aku pesen disajikan di gelas yang cantik!</p>
          </div>
          <div class="col-md-2">
            <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/ridwankamil.jpg" width="200px" height="130px">
          </div>
          <div class="col-md-2">
            <h6>Ridwan Kamil</h6>
            <p>Lokasinya cukup nyempil di tengah-tengah wilayah Limo, Depok dan bisa dikatakan sebagai hidden gem alias
              tempat indah yang tersembunyi..</p>
          </div>
          <div class="col-md-2">
            <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/Rachquel.jpg" width="200px" height="130px">
          </div>
          <div class="col-md-2">
            <h6>Rachquel</h6>
            <p>Salah satu tempat nongkrong chill nih di depok. Lokasinya pinggir jalan berkonsep garden. Ada tempat
              indoor, outdoor dan lesehan juga.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr />
</body>

</html>