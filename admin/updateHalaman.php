<?php
include 'koneksi.php';
$id=$_POST['id'];
$judul= $_POST['judul'];
$isi= $_POST['isi'];
$gambar= $_POST['gambar'];


$s=mysql_query("UPDATE  halaman SET judul='$judul', isi='$isi', gambar='$gambar' where id='$id'") or die(mysql_error());{
 ?>
  <script type="text/javascript">
  alert("Data Halaman Berhasil Disimpan");
  window.location.href='halaman.php';
 </script>
 <?php
}


 ?>