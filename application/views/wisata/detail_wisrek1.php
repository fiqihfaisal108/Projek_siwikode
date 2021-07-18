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
      <h2>Detail Wisata Rekreasi 1</h2>
      <fieldset style="border:3px solid black;padding: 15px">
        <p>Galeri Foto Masjid Kubah Mas</p>
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/masjidkubahmas.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/kubahmasdepok.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/kubahmas.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/masjiddepok.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/dalammasjid.jpg" width="200px" height="140px">
            </div>
            <div class="col-md-2">
              <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/dalammasjid2.png" width="200px" height="140px">
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
            <p>Masjid dengan gaya timur tengah ini diresmikan pada bulan desembar 2006. Masjid ini mempunyai kubah
              berlapis emas yang melambangkan rukun islam. Tak hanya tempat ibadah, disana juga terdapat toko makanan
              dan butik. Yang gemar berfoto, juga bisa mengimplementasikan hobinya disini. Selain itu, terdapat villa
              yang bisa digunakan untuk bermalam dan kegiatan khusus seperti resepsi pernikahan atau syukuran keluarga.
              Villa 2 terdiri atas 6 kamar utama, 4 kamar mandi, ruang keluarga, ruang tamu, musala, pantry, balkon, dan
              halaman villa. Sedangkan Villa 3 memiliki 8 kamar utama, 1 kamar biasa, 10 kamar mandi, ruang keluarga,
              ruang tamu, musala, pantry, balkon, dan halaman villa. Bayar masuk untuk menikmati fasilitas masjid hanya,
              Rp. 15000.</p>
          </fieldset>
        </div>
        <div class="col-md-6">
          <fieldset style="border:3px solid black;padding: 15px">
            <h6>Alamat & Peta Lokasi</h6>
            <p>Pos sekuriti kubah emas, Jl. Raya Meruyung, Meruyung, Kec. Limo, kota, Jawa Barat 16515.</p>
            <div class="embed-responsive embed-responsive-3by4"></div>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.076737143248!2d106.76981351476994!3d-6.384097295380525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ef282b03e03d%3A0x7a3c654ea43229d2!2sMasjid%20Kubah%20Emas%20Dian%20Al-Mahri%20Depok!5e0!3m2!1sid!2sid!4v1611830152452!5m2!1sid!2sid"
              width="608" height="185" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
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
            <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/ricis.jpg" width="200px" height="130px">
          </div>
          <div class="col-md-2">
            <h6>Ria Ricis</h6>
            <p>Suasana masjid yang asri bikin tambah betah untuk mendekatkan diri kepada Allah SWT, sekaligus bisa
              menikmati makanan yang disediakan di kantin.</p>
          </div>
          <div class="col-md-2">
            <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/sandiaga.jpg" width="200px" height="130px">
          </div>
          <div class="col-md-2">
            <h6>Sandiaga Uno</h6>
            <p>Suasana masjid yang asri adalah tempat idaman seluruh muslim. Beribadah bisa semakin khusuk, dan juga
              butik yang ditawarkan tak kalah indahnya.</p>
          </div>
          <div class="col-md-2">
            <img alt="Bootstrap Image Preview" src="<?php echo base_url()?>/img/foto/wanita.jpg" width="200px" height="130px">
          </div>
          <div class="col-md-2">
            <h6>Aisyah</h6>
            <p>Awalnya saya ke Masjid kubah emas karena ada acara di villanya. Namun melihat suasana masjid yang membuat
              hati damai, membuat saya betah berlama lama disana.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <hr />
</body>

</html>