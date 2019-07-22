<?php
include "../koneksi/koneksi.php"; 
date_default_timezone_set("Asia/Jakarta");
// Hapussssssss
if (isset($_GET['hapus'])) {
  $hapus="delete from tb_kunjungan where kd_pasien = '$_GET[id]'";
  $hoho = mysqli_query($con, $hapus);
  if($hoho){
    echo "<script>alert('Data Terhapus')</script>";
    echo "<script>document.location.href='kunjungan.php';</script>";
  }
 }
/*EDITTT*/
 if (isset($_GET['edit'])) {
  $am="SELECT * from tb_kunjungan where kd_pasien = '$_GET[id]'";
  $bil=mysqli_query($con, $am);
  $ambil = mysqli_fetch_array($bil);
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="icon" type="image/png" href="../img/log1.jpg"/>
	<title>Kunjungan</title>

</head>
<body>	
	<form method="POST">
<nav class="navbar navbar-expand-lg bg-primary">
  <a class="navbar-brand" href="#">   
    <h3 style="text-indent: 50px; color: white;">Data Pasien</h3>
  </a>
  <!-- Navbar content -->
  <a class="btn btn-danger my-2 my-sm-0 ml-auto" href="../home/home.php" ">Kembali</a>
  
  <!-- Close Navbar -->
 
</nav>
<!-- isi -->
<div class="container" style="margin-top: 10px;">
  <form class="form-inline" >
    <input style="float: right;" type="submit" name="cari" value="Cari">
    <input style="float: right;" type="text" name="tcari" placeholder="Nama" autocomplete="off" value="<?php echo @$_POST['tcari'] ?>">
  </form>
<!-- OPEN TABEL -->
<div class="table-resvonsive" >
	<table class="table table-striped table-hover" >
  <thead class="table-primary">
    <tr>
      <th scope="col" style="text-align: center;">No</th>
      <th scope="col" style="text-align: center;">Kode Pasien</th>
      <th scope="col">Nama Pasien</th>
      <th scope="col">Umur</th>
      <th scope="col">Status</th>
      <th scope="col">Diagnosa</th>
      <th scope="col">Tarif</th>
      <th scope="col">Tanggal Masuk</th>
      <th colspan="2" style="text-align: center; padding-right: 60px;">Aksi</th>

    </tr>
  </thead>
  <tbody>
    <?php 
         $sql = mysqli_query($con, "SELECT * FROM tb_kunjungan");
    if (isset($_POST['cari'])) {
      // pake % itu kaya tobe yang namanya sama kaya tcari
      $sql = "SELECT * from tb_kunjungan where nama like '%$_POST[tcari]%'";
    }else{
      $sql="SELECT * from tb_kunjungan";	
    }

    
         $sql = mysqli_query($con, $sql);
           $no=0;
        while ($r = mysqli_fetch_array($sql)) {
          $no++;
  ?>
     <tr >
           <td class="table-primary" style="text-align: center;"><h6><?php echo $no ?></h6></td>
          <td style="text-align: center;"><?php echo $r['kd_pasien']; ?></td>
           <td><?php echo $r['nama']; ?></td>
           <td><?php echo $r['umur']."  thn"; ?></td>
           <td><?php echo $r['status']; ?></td>
           <td><?php echo $r['diagnosa']; ?></td>
           <td><?php echo $r['tarif']; ?></td>
           <td><?php echo $r['tgl_masuk']; ?></td>
           <td><a class="btn btn-success" href="editpasien.php?edit&id=<?php echo $r['kd_pasien'] ?>" role="button">Edit</a></td>
         <td><a class="btn btn-danger" href="kunjungan.php?hapus&id=<?php echo $r['kd_pasien'] ?>" onClick="return confirm ('Apakah Anda yakin akan menghapus ?')" name = "hapus" role="button">Hapus</a></td>
     </tr>
     <?php
 }

 ?>
  </tbody>
</table>
</div>
</div>
<!-- CLOSE TABEL -->
</form>


  <!-- Footer -->
<div class="footer">
  
</div>
</body> 
</html>