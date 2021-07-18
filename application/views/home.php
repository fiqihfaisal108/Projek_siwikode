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

  <div>
      <h4 style="text-align: center;">
        Wisata Rekreasi dan Kuliner Unggulan depok
      </h4>
  </div>
  
  <br>
  <style> 
    article {
      width: 98%;
      border-radius: 3px;
      margin: 5px 5px 5px 5px;
      border: 1px solid gainsboro;
      clear: both;
    }

    article .p {
      padding: 5px 6px 5px 5px;
      line-height: 1, 5;
    }

    article .konten {
      width: 23%;
      height: auto;
      margin: 5px 5px 5px 5px;
      border-radius: 3px;
      border: 1px solid gainsboro;
      float: left;
    }

    article .isi {
      width: 98%;
      height: auto;
      margin: 5px 5px 5px 5px;
      border-radius: 3px;
      border: 1px solid gainsboro;
      float: left;
    }

    article .judul {
      font-size: xx-large;
      margin-bottom: 10px;
      margin-left: 10px;
      margin-top: 10px;
      text-align: center;
    }

    article .isi p {
      margin-top: 0;
    }

    article .isi img {
      float: left;
      margin: 5px 5px 5px 5px;
    }

    article .konten:hover {
      opacity: 0, 9;
    }

    article .konten img {
      width: 98%;
      height: 150px;
      margin: 5px 5px 5px 5px;
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      margin: auto;
    }

    article .konten .judul {
      margin-left: 5px;
      text-decoration: none;
      font-size: x-large;
      color: #020101;
    }

    article .konten a:hover {
      opacity: 0, 9;
    }

    footer {
      clear: both;
      width: 98%;
      height: auto;
      text-align: center;
      margin: 5px 5px 5px 5px;
      border-radius: 5px;
      border-bottom: 1px solid gainsboro;
      padding-top: 15px;
      padding-bottom: 15px;
    }
  </style>
  <article>
    <div class="konten">
      <a href="#"><img src="<?php echo base_url()?>/img/foto/kubahmasdepok.jpg"></a>
      <div class="judul">
        <a href="<?php echo base_url()?>index.php/welcome/detail1">Masjid kubahmas</a>
      </div>
      <p>masjid yang terletak disawangan depok yang berkubah mas</p>
    </div>
    <div class="konten">
      <a href="#"><img src="<?php echo base_url()?>/img/foto/tamanwiladatika.jpg"></a>
      <div class="judul">
        <a href="<?php echo base_url()?>index.php/welcome/detail2">taman wiladatika</a>
      </div>
      <p>taman wiladatika adalah taman yangan ada di depok</p>
    </div>
    <div class="konten">
      <a href="#"><img src="<?php echo base_url()?>/img/foto/99pepohonan.JPG"></a>
      <div class="judul">
        <a href="<?php echo base_url()?>index.php/welcome/detail1">99 pepohonan</a>
      </div>
      <p>adalah wisata yang terdapat banyak pepohonan</p>
    </div>
    <div class="konten">
      <a href="#"><img src="<?php echo base_url()?>/img/foto/scooter.jpg"></a>
      <div class="judul">
        <a href="<?php echo base_url()?>index.php/welcome/jelas2">cave scooter</a>
      </div>
      <p>cave scooter adalah cave yang bertemakan scooter</p>
    </div>
    <div class="konten">
      <a href="#"><img src="<?php echo base_url()?>/img/foto/jacob.jpg"></a>
      <div class="judul">
        <a href="<?php echo base_url()?>index.php/welcome/jelas1">cave jacob</a>
      </div>
      <p>cave jacob adalah cave yang terletak didepok</p>
    </div>
    <div class="konten">
      <a href="#"><img src="<?php echo base_url()?>/img/foto/pops.jpg"></a>
      <div class="judul">
        <a href="<?php echo base_url()?>index.php/welcome/jelas3">pops cave</a>
      </div>
      <p>pops cave adalah cave yang terdapat barang antik di dalamnya</p>
    </div>
  </article>
  <footer>tugas siwikode</footer>
  </div>
</body>

</html>