<?php

$username="bambang764";
$password="bambang764";
$database="LOCALHOST/XE";

$koneksi=oci_connect($username,$password,$database);

if(!$koneksi) {
$err=oci_error();
echo "Gagal tersambung ke ORACLE". $err['text'];
} else {
	// echo "koneksi berhasil";
}

?>