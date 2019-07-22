<?php

	include"../koneksi/koneksi.php";


	$cari_kd = mysqli_query($con, "SELECT max(kd_kb) as kode from tb_kb");
	$tm_cari = mysqli_fetch_array(	$cari_kd);
	$kode=substr($tm_cari['kode'], 3,4	);
	$tambah=$kode+1;
		if($tambah>=10){
			$id="KB00".$tambah;
		}elseif ($tambah>=100) {
			$id="KB0".$tambah;
		}elseif ($tambah>=1000) {
			$id="KB".$tambah;
		}else{
			$id="KB000".$tambah;
		}


	// Simpennnnn

if (isset($_POST['simpan'])) {
	$sim="INSERT into tb_kb values ('$_POST[kd_kb]','$_POST[tgl_masuk]','$_POST[nama]','$_POST[umur]','$_POST[alamat]','$_POST[status]','$_POST[cek_kembali]' )";
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
<div class="container row justify-content-md-center" style="padding-top: 30px; ">
	<div class="card  text-center " style="width: 18rem;">
  <img class="card-img-top" src="../img/masuk.jpg" alt="Card image cap">
  <div class="card-body">
    <p class="card-text">Mari Kita Input Pasien KB masuk Hari ini</p>
  </div>
</div>
<div class="p-3 mb-1 bg-danger text-white" >
<div style="padding: 40px; padding-top: 60px; padding-left:50px;">
	<table >

		<tbody>
			<tr>
				<td><input type="text" name="kd_kb" placeholder="Kode KB " autocomplete="off" required value="<?php echo $id;?>"></td>
				<td><input type="text" name="nama" placeholder="Nama" autocomplete="off" required></td>
				<td><input type="text" name="umur" placeholder="Umur" autocomplete="off" required></td>
				
			</tr>
			<tr>
				<td>Status</td>
				<td><select name="status"><option>Baru</option><option>Lama</option></select></td>
				<td><textarea name="alamat" placeholder="Alamat" autocomplete="off" required></textarea></td>

			</tr>
			<tr>
					<td>Tanggal Masuk</td>
					<td><input type="text" name="tgl_masuk" placeholder="01 Desember 2018" autocomplete="off" required></td>
			</tr>
			<tr>
				<td>Cek Kembali</td>
				<td><input type="text" name="cek_kembali" placeholder="12 Desember 2018" autocomplete="off" required></td>
				<td><input type="submit" name="simpan" value="Simpan" class="btn-success"></td>
				
			</tr>
		</tbody>
	</table>
	</div>
	</div>
	</div>
</body>
</html>