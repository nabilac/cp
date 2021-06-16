<?php
include 'koneksi.php';
$id=$_POST['id'];
$isi1= $_POST['isi1'];
$isi2= $_POST['isi2'];


$s=mysql_query("UPDATE  tentang SET isi1='$isi1', isi2='$isi2' where id='$id'") or die(mysql_error());{
 ?>
  <script type="text/javascript">
  alert("Data Tentang Berhasil Disimpan");
  window.location.href='tentang.php';
 </script>
 <?php
}


 ?>