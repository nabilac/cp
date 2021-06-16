 <?php
 include 'koneksi.php';
 ?>
 
<?php
$isi1   = $_POST['isi1'];
$isi2   = $_POST['isi2'];

$s=mysql_query("INSERT INTO tentang VALUES('', '$isi1','$isi2')") or die(mysql_error());{
 ?>
 <script>
  alert("Data Tentang Berhasil Disimpan");
  window.location.href='tentang.php';

 </script>
 <?php
}

 ?>
