<?php

	include"../koneksi/koneksi.php";


$id = $_GET['id'];
$sql = "SELECT * FROM tb_kunjungan WHERE kd_pasien = '$id'";
$row = mysqli_query($con, $sql);
$result = mysqli_fetch_assoc($row);

	// Simpennnnn

if (isset($_POST['update'])) {
	$sim= "UPDATE tb_kunjungan SET kd_pasien = '$_POST[kd_pasien]', nama  ='$_POST[nama]', umur = '$_POST[umur]' , status ='$_POST[status]',
diagnosa = '$_POST[diagnosa]', tarif = '$_POST[tarif]', tgl_masuk = '$_POST[tgl_masuk]' where kd_pasien = '$_GET[id]'";
	$pan=mysqli_query($con,$sim);
	if ($pan) {
		echo "<script>alert('Data Tersimpan')</script>";
		echo "<script>document.location.href='kunjungan.php';</script>";
	}
	else{
		echo "<script>alert('Data Gagal Tersimpan')</script>";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="icon" type="image/png" href="../img/log1.jpg"/>
	<title>Kunjungan</title>
	<title>Input</title>
</head>
<body>
	<form method="post">
			<!-- As a heading -->
<nav class="navbar navbar-expand-lg bg-dark">
  <a class="navbar-brand" href="#">
    <img src="../img/logo.png" width="50" height="50" >
  </a>
  <!-- Navbar content -->
  <h3 style="text-indent: 50px; color: white;">Bidan Siti Rukoyah</h3>
  <a class="btn btn-danger ml-auto" href="kunjungan.php"  role="button">Kembali</a>
  
  <!-- Close Navbar -->
 
</nav>
<div class="container row justify-content-md-center" style="padding-top: 30px; ">
	<div class="card  text-center " style="width: 18rem;">
  <img class="card-img-top" src="../img/input.png" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Update Data Pasien Yang Dipilih</p>
  </div>
</div>
<div>
	<div class="p-3 mb-2 bg-info text-dark">
<div style="padding: 40px; padding-top: 120px;  padding-left:50px;">
	<table >

		<tbody>
			<tr>
				<td><input type="text" name="kd_pasien" placeholder="Kode Pasien" autocomplete="off"  value="<?php echo $result['kd_pasien']?>" required></td>
				<td><input type="text" name="nama" placeholder="Nama" autocomplete="off"  value="<?php echo $result['nama']?>" required></td>
				<td><input type="text" name="umur" placeholder="Umur" autocomplete="off"  value="<?php echo $result['umur']?>" required></td>
				
			</tr>
			<tr>
				<td><input type="text" name="diagnosa" placeholder="Diagnosa" autocomplete="off"  value="<?php echo $result['diagnosa']?>" required></td>
				<td><input type="text" name="tarif" placeholder="Tarif" autocomplete="off"  value="<?php echo $result['tarif']?>" required></td>
				<td><select name="status"  value="<?php echo $result['status']?>"><option>Baru</option><option>Lama</option></select></td>
				
			</tr>
			<tr>
				<td></td>
				<td><input type="text" name="tgl_masuk" placeholder="01 Desember 2018" autocomplete="off"  value="<?php echo $result['tgl_masuk']?>" required></td>
				<td><input type="submit" name="update" value="Update" class="btn-success"></td>
				
			</tr>
		</tbody>
		
	</table>
<div style="padding-top:100px;">
</div>
	</div>
	</div>
	</div>
</body>
</html>