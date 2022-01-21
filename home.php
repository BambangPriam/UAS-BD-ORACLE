<center><br><br><br><br><br><br><br><br>
<img src="assets/images/logo_upb.png" width="200px height="200px" /> <br>
<font Size="6" face="Helvetica">Sistem Informasi Akademik</font> <br>
<font Size="6">Universitas Pelita Bangsa</font>
</center>


		
<?php 
			include("config.php");
				$stid = oci_parse($koneksi, 'select count(*) as LAKI from mhs_lakilaki');
				oci_execute($stid);
				$total2 = oci_fetch_array($stid,OCI_BOTH);
			?>
				<div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                  </div>
                  <p class="card-category">Jumlah Mahasiswa Laki-laki</p>
               <h3 class="card-title"><?php echo $total2['LAKI'];?>
                    <small>Orang</small>
				</h3>
 </div>
                <div class="card-footer">
                  <div class="stats">
                  </div>
                </div>
              </div>
			  </div>

		  
<?php 
				include("config.php");
				$stid = oci_parse($koneksi, 'select count(*) as PEREM from mhs_perempuan');
				oci_execute($stid);
				$total2 = oci_fetch_array($stid,OCI_BOTH);
			?>
				<div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                  </div>
                  <p class="card-category">Jumlah Mahasiswa Perempuan</p>
               <h3 class="card-title"><?php echo $total2['PEREM'];?>
                    <small>Orang</small>
				</h3>
				
				</div>
                <div class="card-footer">
                  <div class="stats">
                  
                  </h3>
				  </div>
				  </div>
				  </div>
				  </div>	
		</table>
		</center>
	</body>
	</html>
	