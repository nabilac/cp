<?php
include 'koneksi.php';
$id=$_POST['id'];
$nama= $_POST['nama'];
$email= $_POST['email'];
$telp= $_POST['telp'];
$username= $_POST['username'];
$password= $_POST['password'];


$s=mysql_query("UPDATE  users SET nama='$nama', email='$email', telp='$telp', username='$username', password='$password' where id='$id'") or die(mysql_error());{
 ?>
  <script type="text/javascript">
  alert("Data Admin Berhasil Disimpan");
  window.location.href='admin.php';
 </script>
 <?php
}


 ?>