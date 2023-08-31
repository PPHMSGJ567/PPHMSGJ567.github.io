<?php 
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cetak Peserta</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@500&display=swap" rel="stylesheet">
	<script>
		window.print();
	</script>
</head>
<body>

	<h2>Laporan Calon Siswa</h2><br><br>
	<table class="table" border="1">
				<thead>
					<tr>
						<th>No</th>
						<th>ID Pendaftaran</th>
						<th>Tahun Ajaran</th>
						<th>nik</th>
						<th>gelar_depan</th>
						<th>Nama</th>
						<th>gelar_belakang</th>
						<th>Tempat, Tanggal Lahir</th>
						<th>almt_email</th>
						<th>no_hp</th>
						<th>no_kk</th>
						<th>nm_ayah</th>
						<th>nm_ibu</th>
						<th>provinsi</th>
						<th>kota_kabupaten</th>
						<th>kecamatan</th>
						<th>desa</th>
						<th>rt</th>
						<th>rw</th>
						<th>Alamat</th>
						<th>no_rekening</th>
						<th>nm_rekening</th>
						<th>nm_bank</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$no = 1;
						$list_peserta = mysqli_query($conn, "SELECT * FROM tb_pengurus");
						while($row = mysqli_fetch_array($list_peserta)){
					?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row['id_pendaftaran'] ?></td>
						<td><?php echo $row['th_ajaran'] ?></td>
						<td><?php echo $row['nik'] ?></td>
						<td><?php echo $row['gelar_depan'] ?></td>
						<td><?php echo $row['nama_lengkap'] ?></td>
						<td><?php echo $row['gelar_belakang'] ?></td>
						<td><?php echo $row['tmp_lahir'].', '.$row['tgl_lahir'] ?></td>
						<td><?php echo $row['almt_email'] ?></td>
						<td><?php echo $row['no_hp'] ?></td>
						<td><?php echo $row['no_kk'] ?></td>
						<td><?php echo $row['nama_ayah'] ?></td>
						<td><?php echo $row['nama_ibu'] ?></td>
						<td><?php echo $row['provinsi'] ?></td>
						<td><?php echo $row['kota_kabupaten'] ?></td>
						<td><?php echo $row['kecamatan'] ?></td>
						<td><?php echo $row['desa'] ?></td>
						<td><?php echo $row['rt'] ?></td>
						<td><?php echo $row['rw'] ?></td>
						<td><?php echo $row['alamat_lengkap'] ?></td>
						<td><?php echo $row['no_rekening'] ?></td>
						<td><?php echo $row['nama_rekening'] ?></td>
						<td><?php echo $row['nama_bank'] ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>

</body>
</html>