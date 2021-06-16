<?php
include 'koneksi.php';
$id=$_POST['id'];
$alamat   = $_POST['alamat'];
$email   = $_POST['email'];
$telp   = $_POST['telp'];
$link_twitter   = $_POST['link_twitter'];
$link_facebook   = $_POST['link_facebook'];
$link_instagram   = $_POST['link_instagram'];
$link_linkedin   = $_POST['link_linkedin'];


$s=mysql_query("UPDATE  kontak SET alamat='$alamat', email='$email', telp='$telp', link_twitter='$link_twitter', link_facebook='$link_facebook', link_instagram='$link_instagram', link_linkedin='$link_linkedin' where id='$id'") or die(mysql_error());{
 ?>
  <script type="text/javascript">
  alert("Data Kontak Berhasil Disimpan");
  window.location.href='kontak.php';
 </script>
 <?php
}


 ?>