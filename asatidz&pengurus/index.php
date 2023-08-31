<?php 
	include 'koneksi.php';

	if(isset($_POST['submit'])){

		// ambil 1 id terbesar di kolom id_pendaftaran, lalu ambil 5 karakter aja dari sebelah kanan
		$getMaxId = mysqli_query($conn, "SELECT MAX(RIGHT(id_pendaftaran, 5)) AS id FROM tb_pengurus");
		$d = mysqli_fetch_object($getMaxId);
		$generateId = 'P'.date('Y').sprintf("%05s", $d->id + 1);

		// proses insert
		$insert = mysqli_query($conn, "INSERT INTO tb_pengurus VALUES (
				'".$generateId."',
				'".date('Y-m-d')."',
				'".$_POST['th_ajaran']."',
				'".$_POST['nik']."',
				'".$_POST['gelar_depan']."',
				'".$_POST['nm']."',
				'".$_POST['gelar_belakang']."',
				'".$_POST['tmp_lahir']."',
				'".$_POST['tgl_lahir']."',
				'".$_POST['almt_email']."',
				'".$_POST['no_hp']."',
				'".$_POST['no_kk']."',
				'".$_POST['nama_ayah']."',
				'".$_POST['nam_ibu']."',
				'".$_POST['provinsi']."',
				'".$_POST['kota_kabupaten']."',
				'".$_POST['kecamatan']."',
				'".$_POST['desa']."',
				'".$_POST['rt']."',
				'".$_POST['rw']."',
				'".$_POST['alamat']."',
				'".$_POST['no_rekening']."',
				'".$_POST['nm_rekening']."',
				'".$_POST['nm_bank']."'
			)");

		if($insert){
			echo '<script>window.location="berhasil.php?id='.$generateId.'"</script>';
		}else{
			echo 'huft '.mysqli_error($conn);
		}

	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PPHM SGJ Data Asatidz&Pengurus '23-'24</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
</head>
<body>

	<!-- bagian box formulir -->
	<section class="box-formulir">
		
		<h2><center>FORM DATA ASATIDZ & PENGURUS</center></h2>
		<h2><center>ASRAMA SUNAN GUNUNG JATI</center></h2>

		<!-- bagian form -->
		<form action="" method="post">
			
			<div class="box">
				<table border="0" class="table-form">
					<tr>
						<td>Tahun Ajaran</td>
						<td>:</td>
						<td>
							<input type="text" name="th_ajaran" class="input-control" value="2023/2024" readonly>
						</td>
					</tr>
					<tr>
				</table>
			</div>

			<h3><center>DATA DIRI ASATIDZ & PENGURUS</center></h3>
			<div class="box">
				<table border="0" class="table-form">
					<tr>
						<td>NIK</td>
						<td>:</td>
						<td>
							<input type="text" name="nik" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Gelar Depan</td>
						<td>:</td>
						<td>
							<input type="text" name="gelar_depan" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Nama Lengkap</td>
						<td>:</td>
						<td>
							<input type="text" name="nm" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Gelar Belakang</td>
						<td>:</td>
						<td>
							<input type="text" name="gelar_belakang" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Tempat Lahir</td>
						<td>:</td>
						<td>
							<input type="text" name="tmp_lahir" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td>:</td>
						<td>
							<input type="date" name="tgl_lahir" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Alamat Email</td>
						<td>:</td>
						<td>
							<input type="text" name="almt_email" class="input-control">
						</td>
					</tr>
					<tr>
						<td>No_Hanphone</td>
						<td>:</td>
						<td>
							<input type="text" name="no_hp" class="input-control">
						</td>
					</tr>
					<tr>
						<td>No_KK</td>
						<td>:</td>
						<td>
							<input type="text" name="no_kk" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Nama Ayah</td>
						<td>:</td>
						<td>
							<input type="text" name="nm_ayah" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Nama Ibu</td>
						<td>:</td>
						<td>
							<input type="text" name="nm_ibu" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Provinsi</td>
						<td>:</td>
						<td>
							<input type="text" name="provinsi" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Kota_Kabupaten</td>
						<td>:</td>
						<td>
							<input type="text" name="kota_kabupaten" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Kecamatan</td>
						<td>:</td>
						<td>
							<input type="text" name="kecamatan" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Desa</td>
						<td>:</td>
						<td>
							<input type="text" name="desa" class="input-control">
						</td>
					</tr>
					<tr>
						<td>RT</td>
						<td>:</td>
						<td>
							<input type="text" name="rt" class="input-control">
						</td>
					</tr>
					<tr>
						<td>RW</td>
						<td>:</td>
						<td>
							<input type="text" name="rw" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Alamat Lengkap</td>
						<td>:</td>
						<td>
							<textarea class="input-control" name="alamat"></textarea>
						</td>
					</tr>
					<tr>
						<td>No_Rekening</td>
						<td>:</td>
						<td>
							<input type="text" name="no_rekening" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Nama Rekening</td>
						<td>:</td>
						<td>
							<input type="text" name="nm_rekening" class="input-control">
						</td>
					</tr>
					<tr>
						<td>Nama Bank</td>
						<td>:</td>
						<td>
							<input type="text" name="nm_bank" class="input-control">
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<input type="submit" name="submit" class="btn-daftar" value="Daftar Sekarang">
						</td>
					</tr>
				</table>
			</div>

		</form>

	</section>

</body>
</html>