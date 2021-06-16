<?php
include 'koneksi.php';
 ?>
<?php
$id =$_GET['id'];
$db=mysql_query("DELETE FROM tentang WHERE id='$id'") or die(mysql_error());
{?>
<script type="text/javascript">
 alert("Anda Yakin ??");
 window.location.href="tentang.php";
</script>

<?php } ?>