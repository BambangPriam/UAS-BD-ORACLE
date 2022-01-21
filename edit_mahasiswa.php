<!DOCTYPE html>




<body id="page-top">
  <div id="wrapper">

	
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        
	
        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-left justify-content-between mb-6">
            <h1 class="h3 mb-4 text-gray-800">Edit Data Mahasiswa</h1>
			
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Edit Data Mahasiswa</li>
            </ol>		
          </div>
		  
		  <!-- Isi-->
		  <div class="row">
            <div class="col-lg-6">
			<?php
			include 'config.php';
			$NIM = $_GET['NIM'];
			$stid = oci_parse($koneksi, "SELECT * FROM anggota WHERE nim='$NIM'");
			oci_execute($stid);
			$d = oci_fetch_array ($stid, OCI_BOTH)
			?>
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Edit Data Mahasiswa</h6>
                </div>
                <div class="card-body">
                  <form method='post' action='aksi_mahasiswa.php?act=update'>
                    <div class="form-group">
					  <input type="hidden" name="nim" value="<?php echo $d["NIM"]; ?>">
                      <label for="nama">Nama Mahasiswa</label>
                      <input type="text" class="form-control" name="nama" value="<?php echo $d["NAMA"]; ?>">
                      
					  </div>
                    <div class="form-group">
                      <label for="alamat">Jenis Kelamin</label>
                      <input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $d["JENIS_KELAMIN"]; ?>">
					  
                    </div>
					
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input type="text" class="form-control" name="alamat" value="<?php echo $d["ALAMAT"]; ?>">
					  
                    </div>
					
					<div class="form-group">
                      <label for="alamat">Nama Dosen</label>
                      <select name='id_beras' class='form-control'>
					  <?php												
						$stid = oci_parse($koneksi, 'SELECT * from dospem');
						oci_execute($stid);
						while (($d = oci_fetch_array ($stid, OCI_BOTH)) != false) {
						$id_dospem = $d["ID_DOSPEM"];
						$nama_dosen = $d["NAMA_DOSEN"];
						echo "<option value='$id_dospem'>$nama_dosen</option>";
						}
						?>
						</select>
					  
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
				 
                </div>
              </div>
			  </div>
			  </div>

          

          

</body>  
</body>

</html>