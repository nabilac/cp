 <?php
 include 'koneksi.php';
 ?>
 
<?php
$alamat   = $_POST['alamat'];
$email   = $_POST['email'];
$telp   = $_POST['telp'];
$link_twitter   = $_POST['link_twitter'];
$link_facebook   = $_POST['link_facebook'];
$link_instagram   = $_POST['link_instagram'];
$link_linkedin   = $_POST['link_linkedin'];

$s=mysql_query("INSERT INTO kontak VALUES('', '$alamat','$email', '$telp','$linkTwitter', '$linkFacebook','$linkInstagram', '$linkLinkedin')") or die(mysql_error());{
 ?>
 <script>
  alert("Data Kontak Berhasil Disimpan");
  window.location.href='kontak.php';

 </script>
 <?php
}

 ?>
