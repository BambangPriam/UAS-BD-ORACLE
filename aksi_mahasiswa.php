<?php
include("config.php");

$act=$_GET['act'];

if ($act=='delete'){
	$NIM=$_GET['NIM'];
	$sql="DELETE FROM anggota WHERE NIM = '$NIM'";
	$prepare = ociparse($koneksi, $sql);
	ociexecute($prepare);
	oci_commit($koneksi);

	if($prepare){
			echo '<script>alert("Berhasil menghapus data."); document.location="index.php?page=tampil_mhs";</script>';
		}else{
			echo '<script>alert("Gagal menghapus data."); document.location="index.php?page=tampil_mhs";</script>';
		}
		}
	
elseif ($act=='update'){
	$NIM = $_POST["nim"];
	$NAMA = $_POST["nama"];
	$JENIS_KELAMIN = $_POST["jenis_kelamin"];
//	$AGAMA = $_POST["agama"];
	$ALAMAT = $_POST["alamat"];
//	$ID_DOSPEM = $_POST["id_dospem"];
//	$NAMA_DOSEN = $_POST["nama_dosen"];
//	$ID_JURUSAN = $_POST["id_jurusan"];
	//$NAMA_JURUSAN = $_POST["nama_jurusan"];
	

	$sql = "UPDATE anggota SET nama='$NAMA', alamat='$ALAMAT', jenis_kelamin='$JENIS_KELAMIN' WHERE nim='$NIM'";
	$prepare = ociparse($koneksi, $sql);
	ociexecute($prepare);
	oci_commit($koneksi);

	if($prepare){
			echo '<script>alert("Berhasil EDIT data."); document.location="index.php?page=tampil_mhs";</script>';
		}else{
			echo '<script>alert("Gagal EDIT data."); document.location="index.php?page=tampil_mhs";</script>';
		}
}	
?>