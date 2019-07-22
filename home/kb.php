  <?php
include "../koneksi/koneksi.php"; 
date_default_timezone_set("Asia/Jakarta");
// Hapussssssss
if (isset($_GET['hapus'])) {
  $hapus="delete from tb_kb where kd_kb = '$_GET[id]'";
  $hoho = mysqli_query($con, $hapus);
  if($hoho){
    echo "<script>alert('Data Terhapus')</script>";
    echo "<script>document.location.href='kb.php';</script>";
  }
 }
/*EDITTT*/
 if (isset($_GET['edit'])) {
  $am="SELECT * from tb_kb where kd_kb = '$_GET[id]'";
  $bil=mysqli_query($con, $am);
  $ambil = mysqli_fetch_array($bil);
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="icon" type="image/png" href="../img/kbb.jpg"/>
  <script rel="stylesheet" type="javascript" href="js/bootstrap.min.js"></script>
	<title>Keluarga Berencana</title>

</head>
<body>	
	<form method="POST">
<nav class="navbar bg-danger" >
  <a class="navbar-brand" href="#">   
    <h3 style="text-indent: 50px; color: white;">Keluarga Berencana</h3>
  </a>
  <!-- Navbar content -->
  <a class="btn btn-primary my-2 my-sm-0 ml-auto" href="../home/home.php" ">Kembali</a>
  
  <!-- Close Navbar -->
 
</nav>
<!-- isi -->
<div class="container" style="margin-top: 10px;">
  
  
  <form class="form-inline" >
  	<a  style="float: left;" class="btn btn-success my-2 my-sm-0 ml-auto"  href="../home/inputkb.php" ">Input</a>
    <input style="float: right;" type="submit" name="cari" value="Cari">
    <input style="float: right;" type="text" name="tcari" placeholder="Nama" autocomplete="off" value="<?php echo @$_POST['tcari'] ?>">
  </form>
<!-- OPEN TABEL -->
<div class="table-resvonsive" >
	<table class="table table-striped table-hover" >
  <thead class="table-danger">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode KB</th>
      <th scope="col">Tanggal Masuk</th>
      <th scope="col">Nama Pasien</th>
      <th scope="col">Umur</th>
      <th scope="col">Alamat</th>
      <th scope="col">Status</th>
      <th scope="col">Cek Kembali</th>   
      <center><th colspan="2" style="padding-left: 70px;">Aksi</th></center>

    </tr>
  </thead>
  <tbody>
    <?php 
         $sql = mysqli_query($con, "SELECT * FROM tb_kb");
    if (isset($_POST['cari'])) {
      // pake % itu kaya tobe yang namanya sama kaya tcari
      $sql = "SELECT * from tb_kb where nama_kb like '%$_POST[tcari]%'";
    }else{
      $sql="SELECT * from tb_kb";	
    }
    
         $sql = mysqli_query($con, $sql);
           $no=0;
        while ($r = mysqli_fetch_array($sql)) {
         
          $no++;
  ?>
     <tr>
           <td  style="text-align: center;"><h6><?php echo $no ?></h6></td>
            <td style="text-align: center;"><?php echo $r['kd_kb']; ?></td>
           <td><?php echo $r['tgl_masuk']; ?></td>
           <td><?php echo $r['nama_kb']; ?></td>          
           <td><?php echo $r['umur']," thn"; ?></td>
           <td><?php echo $r['alamat']; ?></td>
           <td><?php echo $r['status']; ?></td>
           <td><?php echo $r['cek_kembali']; ?></td>           
           <td><a class="btn btn-success" href="editkb.php?edit&id=<?php echo $r['kd_kb'] ?>" role="button">Edit</a></td>
       <td><a class="btn btn-danger" href="kb.php?hapus&id=<?php echo $r['kd_kb'] ?>" onClick="return confirm ('Apakah Anda yakin akan menghapus ?')" name = "hapus" role="button">Hapus</a></td>
     </tr>
     <?php } ?>

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