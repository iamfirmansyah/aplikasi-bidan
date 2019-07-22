<?php

	include"../koneksi/koneksi.php";

$id = $_GET['id'];
$sql = "SELECT * FROM tb_kb WHERE kd_kb = '$id'";
$row = mysqli_query($con, $sql);
$result = mysqli_fetch_assoc($row);

	// Simpennnnn

if (isset($_POST['update'])) {
	$sim= "UPDATE tb_kb SET kd_kb = '$_POST[kd_kb]', tgl_masuk ='$_POST[tgl_masuk]', nama_kb = '$_POST[nama]',umur ='$_POST[umur]',
alamat = '$_POST[alamat]', status = '$_POST[status]',cek_kembali = '$_POST[cek_kembali]' where kd_kb = '$_GET[id]'";
	$pan=mysqli_query($con,$sim);
	if ($pan) {
		echo "<script>alert('Data Tersimpan')</script>";
		echo "<script>document.location.href='kb.php';</script>";
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
<nav class="navbar navbar-expand-lg bg-danger">
  <a class="navbar-brand" href="#">
    <img src="../img/logo.png" width="50" height="50" >
  </a>
  <!-- Navbar content -->
  <h3 style="text-indent: 50px; color: white;">Keluarga Berencana</h3>
  <a class="btn btn-primary ml-auto" href="kb.php"  role="button">Kembali</a>
  
  <!-- Close Navbar -->
 
</nav>
<div class="container row justify-content-md-center" style="padding-top: 50px; ">
	<div class="card  text-center " style="width: 18rem;">
  <img class="card-img-top" src="../img/editkb.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Update Data KB</p>
  </div>
</div>
<div class="p-3 mb-1 bg-danger text-white" >
<div style="padding: 40px; padding-top: 60px; padding-left:50px;">
	<table >

		<tbody>
			<tr>
				<td><input type="text" name="kd_kb" placeholder="Kode KB " autocomplete="off" value="<?php echo $result['kd_kb']?>" required></td>
				<td><input type="text" name="nama" placeholder="Nama" autocomplete="off" value="<?php echo $result['nama_kb']?>" required></td>
				<td><input type="text" name="umur" placeholder="Umur" autocomplete="off" value="<?php echo $result['umur']?>" required></td>
				
			</tr>
			<tr>
				<td>Status</td>
				<td><select name="status" value="<?php echo $result['status']?>">
					<option>Baru</option>
					<option>Lama</option></select></td>
				<td><textarea name="alamat" placeholder="Alamat" autocomplete="off" value="<?php echo $result['alamat']?>" required></textarea></td>

			</tr>
			<tr>
					<td>Tanggal Masuk</td>
					<td><input type="text" name="tgl_masuk" placeholder="01 Desember 2018" autocomplete="off" value="<?php echo $result['tgl_masuk']?>" required></td>
			</tr>
			<tr>
				<td>Cek Kembali</td>
				<td><input type="text" name="cek_kembali" placeholder="12 Desember 2018" autocomplete="off" value="<?php echo $result['cek_kembali']?>" required></td>
				<td><input type="submit" name="update" value="Update" class="btn-success"></td>
				
			</tr>
		</tbody>
	</table>
	</div>
	</div>
	</div>
</body>
</html>