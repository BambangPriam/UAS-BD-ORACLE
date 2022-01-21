<?php include('config.php'); ?>

		<center><font size="6">Tambah Data</font></center>
		<hr>
		<?php
		if(isset($_POST['submit'])){
			$NIM			= $_POST['NIM'];
			$ID_DOSPEM		= $_POST['ID_DOSPEM'];
			$ID_JURUSAN		= $_POST['ID_JURUSAN'];
			$NAMA			= $_POST['NAMA'];
			$JENIS_KELAMIN	= $_POST['JENIS_KELAMIN'];
			$AGAMA			= $_POST['AGAMA'];
			$ALAMAT			= $_POST['ALAMAT'];


$query = "INSERT INTO anggota (NIM, ID_DOSPEM, ID_JURUSAN, NAMA, JENIS_KELAMIN, AGAMA, ALAMAT)   VALUES ('".$NIM."', '".$ID_DOSPEM."', '".$ID_JURUSAN."', '".$NAMA."','".$JENIS_KELAMIN."','".$AGAMA."','".$ALAMAT."')";
	$statement = oci_parse($koneksi,$query);
	$r = oci_execute($statement,OCI_DEFAULT);
	 $res = oci_commit($koneksi);
				if($res){
					echo '<script>alert("Berhasil menambahkan data."); document.location="index.php?page=tampil_mhs";</script>';
				}else{
					echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
				}
			}
		
		?>

		<form action="index.php?page=tambah_mhs" method="post">
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">NIM</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="NIM" class="form-control" size="4" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">ID DOSPEM</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="ID_DOSPEM" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">ID JURUSAN</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="ID_JURUSAN" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama Mahasiswa</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="NAMA" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="JENIS_KELAMIN" class="form-control" required>
				</div>
			</div>
			
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Agama</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="AGAMA" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="ALAMAT" class="form-control" required>
				</div>
			</div>
			
			<div class="item form-group">
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan">
			</div>
		</form>
	</div>
