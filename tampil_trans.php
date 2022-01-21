<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan Oracle</title>
</head>
<body>
<center>
	<h2>Pengambilan Mata Kuliah </h2>
	<center><table border="1">
		<tr>
			<th>ID Transaksi</th>
			<th>Nama</th>
			<th>Matkul yang diambil</th>
			<th>Tanggal ambil</th>
		</tr>
		<?php
		include 'config.php';
		$hari_ini = date("dmY");
		$stid = oci_parse($koneksi, 'SELECT pekuliahan.id_trans, anggota.nama, matkul.matakuliah
FROM pekuliahan
INNER JOIN matkul ON pekuliahan.kode_mk = matkul.kode_mk
INNER JOIN anggota ON pekuliahan.nim = anggota.nim ORDER BY pekuliahan.id_trans ASC'); 

		oci_execute($stid);
		while  (($d = oci_fetch_array($stid, OCI_BOTH)) != false) {
			?>
			<tr>
				<td><?php echo $d['ID_TRANS']; ?></td>
				<td><?php echo $d['NAMA']; ?></td>
				<td><?php echo $d['MATAKULIAH']; ?></td>
				<td><?php echo $hari_ini; ?></td>
				
				</td>
			</tr>
			<?php
		}
		?>
		<a href="index.php">
    <button onClick="window.print();">Print</button>
    </a>

		</table>
		</center>
	</body>
	</html>