<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan Oracle</title>
</head>
<body>
<center>
	<h2>CRUD DATA MAHASISWA </h2>
	<center><table border="1">
		<tr>
			<th>NIM</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Agama</th>
			<th>Alamat</th>
			<th>Nama Jurusan</th>
			<th>Nama Dosen</th>
			<th>Opsi</th>
		</tr>
		<?php
		include 'config.php';
		$stid = oci_parse($koneksi, 'SELECT anggota.nim, anggota.nama, anggota.jenis_kelamin, anggota.agama, 
anggota.alamat, jurusan.nama_jurusan, dospem.nama_dosen
FROM anggota
INNER JOIN jurusan ON anggota.id_jurusan = jurusan.id_jurusan
INNER JOIN dospem ON anggota.id_dospem = dospem.id_dospem 
');
		oci_execute($stid);
		while  (($d = oci_fetch_array($stid, OCI_BOTH)) != false) {
			?>
			<tr>
				<td><?php echo $d['NIM']; ?></td>
				<td><?php echo $d['NAMA']; ?></td>
				<td><?php echo $d['JENIS_KELAMIN']; ?></td>
				<td><?php echo $d['AGAMA']; ?></td>
				<td><?php echo $d['ALAMAT']; ?></td>
				<td><?php echo $d['NAMA_JURUSAN']; ?></td>
				<td><?php echo $d['NAMA_DOSEN']; ?></td>
				<td>
					
					<a class='btn btn-success' href="edit_mahasiswa.php?NIM=<?php echo $d["NIM"];?>" 
							><i class='fa fa-edit'></i></a>
					<a class='btn btn-danger' onclick="return confirm('Anda yakin ingin menghapus data ini ?');" href="aksi_mahasiswa.php?act=delete&NIM=<?php echo $d["NIM"];?>"
					><i class='fa fa-trash'></i></a>
				</td>
			</tr>
			<?php
		}
		?>
		</table>
		</center>
	</body>
	</html>