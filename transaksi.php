<div class="card-body">
                  <form method='post' action='aksi_transaksi.php?act=input'>
                    <div class="form-group">
                      <label for="nama">Pilih Nama Mahasiswa</label>
                      <select name='nim' class='form-control'>
					  <?php
						include 'config.php';
						$stid = oci_parse($koneksi, 'SELECT * from anggota');
						oci_execute($stid);
						while (($d = oci_fetch_array ($stid, OCI_BOTH)) != false) {
						$nim = $d["NIM"];
						$nama = $d["NAMA"];
						echo "<option value='$nim'>$nama</option>";
						}
						?>
						</select>
                      
                    </div>
                    <div class="form-group">
                      <label for="alamat">Pilih Matkul yang akan diambil</label>
                      <select name='kode_mk' class='form-control'>
					  <?php												
						$stid = oci_parse($koneksi, 'SELECT * from matkul');
						oci_execute($stid);
						while (($d = oci_fetch_array ($stid, OCI_BOTH)) != false) {
						$kode_mk = $d["KODE_MK"];
						$matakuliah = $d["MATAKULIAH"];
						
						
						echo "<option value='$kode_mk'>$matakuliah</option>";
						
						}
						?>
						</select>
					  
					  
                    
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>