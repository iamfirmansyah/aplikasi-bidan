<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="icon" type="image/png" href="../img/atas.png"/>
	<title>Selamat Datang</title>
</head>
<body>	
	<form class="method">
<!-- As a link -->

<!-- As a heading -->
<nav class="navbar navbar-expand-lg bg-dark fixed-top">
  <a class="navbar-brand" href="#">
    <img src="../img/logo.png" width="50" height="50" >
  </a>
  <!-- Navbar content -->
  <h3 style="text-indent: 50px; color: white;">Bidan Siti Rukoyah</h3>
  <a class="btn btn-danger my-2 my-sm-0 ml-auto" href="logout.php" onClick="return confirm ('Anda Yakin Ingin Keluar ?')" role="button">Keluar</a>
  
  <!-- Close Navbar -->
 
</nav>
<div class="container" style="padding-top: 130px;">
  <div class="row">
	<div class="card-deck text-center">
  
  <div class="card shadow-lg col-md-6" style="max-width: 22.5rem; max-height: 35.5rem;">
    <img class="card-img-top" src="../img/input.png" alt="Card image cap">
    <div class="card-body ">
      <h5 class="card-title"> Pasien </h5>
      <p class="card-text">Masukan Data Pasien Yang Masuk Hari ini</p>
    </div>
    <div class="card-footer">
      <a class="btn btn-primary" href="input.php" role="button">Input</a>
    </div>
  </div>

  <div class="card shadow-lg col-md-6" style="max-width: 22.5rem; max-height: 35.5rem;">
    <img class="card-img-top" src="../img/thamu.jpg" alt="Card image cap">
    <div class="card-body ">
      <h5 class="card-title"> Data Pasien </h5>
      <p class="card-text"> Data Pasien yang Masuk Hari ini</p>
    </div>
    <div class="card-footer">
      <a class="btn btn-primary" href="kunjungan.php" role="button">Kunjungi</a>
    </div>
  </div>
  
  <div class="card shadow-lg col-md-6" style="max-width: 22.5rem; max-height: 35.5rem;">
    <img class="card-img-top" src="../img/kabe.jpg" alt="Card image cap">
    <div class="card-body p-1 mb-2">
      <h5 class="card-title">KB</h5>
      <p class="card-text"> Data Pasien yang akan melakukan Pemeriksaan KB </p>
    </div>
    <div class="card-footer">
      <a class="btn btn-primary" href="kb.php" role="button"> KB</a>
    </div>
  </div>
  
  </div>
</div>

<section class="about">
  <div class="container" style="padding-top: 120px;">
    <div class="row text-center">
      <div class="col-sm-12">
        <h2>About</h2>
        <hr style="padding-top: 50px; border-top: 2px solid #A0A0A0FF;">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-5 offset-1">
        <h2>Profil</h2>
        <hr>
        Beliau adalah holisoh sikembar sama tapi tak sama, lahir dengan bantuan alat penyedot debu karna susah dikeluarkan
        ia sekarang tumbuh dewasa menjadi anak perempuan jadi jadian yang menyeramkan
        </div>
      <div class="col-sm-5">
        <img src="../img/rara cloning.jpg" class="img-thumbnail">
      </div>
    </div>
  </div>
</section>

  <!-- Footer -->
<div class="footer text-center" style="padding-top: 200px; padding-bottom: 40px; color: #C0C0C0FF;">
<h4>&copy copyright 2018 | Build by Cibaregbeg inc</h4>
</div>
</body>

</html>