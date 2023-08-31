<?php 
	session_start();
	include 'koneksi.php';
	if($_SESSION['stat_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}

	$peserta = mysqli_query($conn, "SELECT * FROM tb_pengurus WHERE id_pendaftaran = '".$_GET['id']."' ");
	$p = mysqli_fetch_object($peserta);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PPHM SGJ | Administrator</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>

	<!-- bagian header -->
	<header>
		<h1><a href="beranda.php">Admin PPHM SGJ</a></h1>
		<ul>
			<li><a href="beranda.php">Beranda</a></li>
			<li><a href="data-peserta.php">Data Peserta</a></li>
			<li><a href="keluar.php">Keluar</a></li>
		</ul>
	</header>

	<!-- bagian content -->
	<section class="content">
		<h2>Detail Peserta</h2>
		<div class="box">
			
			<table class="table-data" border="0">
				<tr>
					<td>Kode Pendaftaran</td>
					<td>:</td>
					<td><?php echo $p->id_pendaftaran ?></td>
				</tr>
				<tr>
					<td>Tahun Ajaran</td>
					<td>:</td>
					<td><?php echo $p->th_ajaran ?></td>
				</tr>
				<tr>
					<td>NIK</td>
					<td>:</td>
					<td><?php echo $p->nik ?></td>
				</tr>
				<tr>
					<td>Gelar Depan</td>
					<td>:</td>
					<td><?php echo $p->gelar_depan ?></td>
				</tr>
				<tr>
					<td>Nama Lengkap</td>
					<td>:</td>
					<td><?php echo $p->nama_lengkap ?></td>
				</tr>
				<tr>
					<td>Gelar Belakang</td>
					<td>:</td>
					<td><?php echo $p->gelar_belakang ?></td>
				</tr>
				<tr>
					<td>Tempat, Tanggal Lahir</td>
					<td>:</td>
					<td><?php echo $p->tmp_lahir.', '.$p->tgl_lahir ?></td>
				</tr>
				<tr>
					<td>Alamat Email</td>
					<td>:</td>
					<td><?php echo $p->almt_email ?></td>
				</tr>
				<tr>
					<td>No_Handphone</td>
					<td>:</td>
					<td><?php echo $p->no_hp ?></td>
				</tr>
				<tr>
					<td>No. KK</td>
					<td>:</td>
					<td><?php echo $p->no_kk ?></td>
				</tr>
				<tr>
					<td>Nama Ayah</td>
					<td>:</td>
					<td><?php echo $p->nama_ayah ?></td>
				</tr>
				<tr>
					<td>Nama Ibu</td>
					<td>:</td>
					<td><?php echo $p->nama_ibu ?></td>
				</tr>
				<tr>
					<td>Provinsi</td>
					<td>:</td>
					<td><?php echo $p->provinsi ?></td>
				</tr>
				<tr>
					<td>Kota_Kabupaten</td>
					<td>:</td>
					<td><?php echo $p->kota_kabupaten ?></td>
				</tr>
				<tr>
					<td>Kecamatan</td>
					<td>:</td>
					<td><?php echo $p->kecamatan ?></td>
				</tr>
				<tr>
					<td>Desa</td>
					<td>:</td>
					<td><?php echo $p->desa ?></td>
				</tr>
				<tr>
					<td>RT</td>
					<td>:</td>
					<td><?php echo $p->rt ?></td>
				</tr>
				<tr>
					<td>RW</td>
					<td>:</td>
					<td><?php echo $p->rw ?></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><?php echo $p->alamat_lengkap ?></td>
				</tr>
				<tr>
					<td>No. Rekening</td>
					<td>:</td>
					<td><?php echo $p->no_rekening ?></td>
				</tr>
				<tr>
					<td>Nama Rekening</td>
					<td>:</td>
					<td><?php echo $p->nama_rekening ?></td>
				</tr>
				<tr>
					<td>Nama Bank</td>
					<td>:</td>
					<td><?php echo $p->nama_bank ?></td>
				</tr>
			</table>

		</div>
	</section>

</body>
</html>