 <?php
 include 'koneksi.php';
 ?>
 
<?php
$nama   = $_POST['nama'];
$email   = $_POST['email'];
$telp   = $_POST['telp'];
$username   = $_POST['username'];
$password  = $_POST['password'];

$s=mysql_query("INSERT INTO users VALUES('', '$nama','$email','$telp','$username','$password')") or die(mysql_error());{
 ?>
 <script>
  alert("Data Admin Berhasil Disimpan");
  window.location.href='admin.php';

 </script>
 <?php
}

 ?>
