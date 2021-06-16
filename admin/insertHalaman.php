 <?php
 include 'koneksi.php';
 ?>
 
<?php
$nama_cp   = $_POST['nama_cp'];
$judul   = $_POST['judul'];
$isi   = $_POST['isi'];
$gambar   = $_POST['gambar'];

$s=mysql_query("INSERT INTO halaman VALUES('', '$nama_cp', '$judul','$isi','$gambar')") or die(mysql_error());{
 ?>
 <script>
  alert("Data Halaman Berhasil Disimpan");
  window.location.href='halaman.php';

 </script>
 <?php
}

 ?>
