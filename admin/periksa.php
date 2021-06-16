<?php
session_start();
#**************** koneksi ke mysql *****************#
include "koneksi.php";
#***************** akhir koneksi ******************#
#jika ditekan tombol login
if(isset($_POST['login'])) { 
 $username = $_POST['username'];
 $password = $_POST['password'];

 if(empty($username)){
    ?><script language="JavaScript">
  alert('Username harus diisi');
  document.location='index.php'</script><?php
 } 
 else if(empty($password)){
?><script language="JavaScript">
 alert('Password harus diisi');
document.location='index.php'</script><?php
 }
 else {

 // cek username yang diketik oleh user sama tidak dengan username yang ada didatabase
 $sql= mysql_query("SELECT * FROM users WHERE username='$username' 
 && password='$password'");

 $cek = mysql_num_rows($sql);
  if($cek > 0){
    // login benar //
    $qry = mysql_fetch_array($sql);
            $_SESSION['username']    = $qry['username'];
            $_SESSION['id']    = $qry['id'];

 $_SESSION['username'] = $username;
 $_SESSION['password'] = $password;
  header("Refresh: 0; URL=dashboard.php");

  } else {
      ?><script language="JavaScript">
 alert('Anda gagal login');
document.location='index.php'</script><?php
  }

}
}
?> 