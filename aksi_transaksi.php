<?php
include("config.php");
$hari_ini = date("dmY");

$act=$_GET['act'];

if ($act=='input'){
echo	$nim = $_POST['nim'];
echo	$kode_mk = $_POST['kode_mk'];

	$sql = "INSERT INTO pekuliahan VALUES ('','$nim','$kode_mk','$hari_ini')";
	$prepare = ociparse($koneksi, $sql);
    ociexecute($prepare);
    oci_commit($koneksi);
   

	if($prepare)
	{
	header('location:transaksi.php');
	}
	else {echo "gagal";} 

}

?>