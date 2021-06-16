<?php 

	$host = "localhost";
	$uname = "root";
	$pswd = "";
	$nama_db = "cp";
	// $host = "sql6.freesqldatabase.com";
	// $uname = "sql6419295";
	// $pswd = "7TRZVPNUGg";
	// $nama_db = "sql6419295";

	$koneksi = mysql_connect($host,$uname,$pswd) or 
	die ("gagal terhubung ke server MYSQL");

	mysql_select_db($nama_db, $koneksi) or die("gagal memilih database!");
?>