<?php

	include"../koneksi/koneksi.php";
		$cari_kd = mysqli_query($con, "SELECT max(kd_pasien) as kode from tb_kunjungan");
	$tm_cari = mysqli_fetch_array(	$cari_kd);
	$kode=substr($tm_cari['kode'], 2,4	);
	$tambah=$kode+1;
		if($tambah>=10){
			$id="P00".$tambah;
		}elseif ($tambah>=100) {
			$id="P0".$tambah;
		}elseif ($tambah>=1000) {
			$id="P".$tambah;
		}else{
			$id="P000".$tambah;
		}


	// Simpennnnn

if (isset($_POST['simpan'])) {
	$sim="INSERT into tb_kunjungan values ('$_POST[kd_pasien]', '$_POST[nama]','$_POST[umur]','$_POST[status]','$_POST[diagnosa]','$_POST[tarif]','$_POST[tgl_masuk]')";
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
  <a class="btn btn-danger ml-auto" href="home.php"  role="button">Kembali</a>
  
  <!-- Close Navbar -->
 
</nav>
<div class="container " style="padding-top: 30px; ">
<div class="row justify-content-md-center col">
	<div class="card  text-center " style="width: 18rem;">
  <img class="card-img-top" src="../img/input.png" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Mari Kita Input Data Pasien Yang Masuk Hari Ini</p>
  </div>
</div>
<div>
	<div class="p-3 mb-2 bg-info text-dark">
<div style="padding: 40px; padding-top: 120px;  padding-left:50px;">
	<table >

		<tbody>
			<tr>
				<td><input type="text"  name="kd_pasien" placeholder="Kode Pasein " autocomplete="off" required value="<?php echo $id;?>" ></td>
				<td><input type="text" name="nama" placeholder="Nama" autocomplete="off" required></td>
				<td><input type="text" name="umur" placeholder="Umur" autocomplete="off" required></td>
				
			</tr>
			<tr>
				<td><input type="text" name="diagnosa" placeholder="Diagnosa" autocomplete="off" required></td>
				<td><input type="text" name="tarif" placeholder="Tarif" autocomplete="off" required></td>
				<td><select name="status" required><option>Baru</option><option>Lama</option></select></td>
				
			</tr>
			<tr>
				<td ></td>
				<td><input type="text" name="tgl_masuk" placeholder="01 Desember 2018" autocomplete="off" required></td>
				<td><input type="submit" name="simpan" value="Simpan" class="btn-success"></td>
				
			</tr>
		</tbody>
		
	</table>
<div style="padding-top:100px;">
</div>
</div>
	</div>
	</div>
	</div>
</body>
</html>