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
      <h2>Detail Wisata Kuliner 1</h2>
      <fieldset style="border:3px solid black;padding: 15px">
        <p>Galeri Foto Jacob Koffie Huis</p>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/jacob.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/interior2.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/interior3.png" width="200px" height="140px">
            </div>
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/jacobkoffie.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/interior4.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/koffie2.jpg" width="200px" height="140px">
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
            <p>Jacob Koffie Huis yang sengaja di desain instagramable untuk anda yang hobi berfoto bersama teman ataupun
              keluarga anda sekaligus menikmati sajian yang kami berikan. Tersedia Indoor dan outdor untuk anda yang
              ingin mengganti suasana. Jacob Koffie yang mengusung tagar #ngopidirumah ini setiap jengkalnya ditata
              berbeda. Jendela yang besar berhiaskan kutipan dinding dan juga ornamen khas belanda. Kami menghadirkan
              ruang tengah yang bisa menampung lebih banyak orang dengan tampilan desain yang berbeda. satu sudut
              dipercantik dengan kutipan dinding dan lampu gantung menyerupai sangkar. Siap siap, berasa #ngopidirumah
              dengan gaya instagramable!</p>
          </fieldset>
        </div>
        <div class="col-md-6">
          <fieldset style="border:3px solid black;padding: 15px">
            <h6>Alamat & Peta Lokasi</h6>
            <p>Jl. Kemuning No.1, Depok, Kec. Pancoran Mas, Kota Depok, Jawa Barat 16431.</p>
            <div class="embed-responsive embed-responsive-3by4"></div>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.953287842125!2d106.81761711477009!3d-6.40002089536922!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ebe044764ed7%3A0x351500e8cb7ec793!2sJacob%20Koffie%20Huis!5e0!3m2!1sid!2sid!4v1611824883923!5m2!1sid!2sid"
              width="608" height="160" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
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
            <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/bella.jpg" width="200px" height="130px">
          </div>
          <div class="col-md-2">
            <h6>Laudya Chintya Bella</h6>
            <p>Suanasanya sejuk dan homey banget, terus ngga kedengeran berisik suara jalan raya. Spot fotonya juga
              bagus banget dan ada musalanya juga.</p>
          </div>
          <div class="col-md-2">
            <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/megawati.jpg" width="200px" height="130px">
          </div>
          <div class="col-md-2">
            <h6>Megawati Soekarno Putri</h6>
            <p>Saking kuatnya nuansa rumah di tempat ini, terasa adem sekali, juga rapih dan tenang. Musik yang di putar
              disini mampu membuat saya terasa tak ingin pulang.</p>
          </div>
          <div class="col-md-2">
            <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/wanita.jpg" width="200px" height="130px">
          </div>
          <div class="col-md-2">
            <h6>Mutiara</h6>
            <p>Pepohonan yang rimbun membuat saya semkain nyaman berada disini. Makanan yang enak sekaligus tempat
              berfoto adalah dua hal yang saya gemari.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr />
</body>

</html>