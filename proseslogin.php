<?php
include "koneksi.php";

$username = $_POST['username'];
$password     = $_POST['password'];

$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);
$login    = mysql_query("SELECT * FROM user WHERE username='$username' AND password='$password'");
$ketemu   = mysql_num_rows($login);
$r        = mysql_fetch_array($login);


if (($ketemu > 0)){
  session_start();
  $_SESSION[username]     = $r[username];
  $_SESSION[password] = $r[password];
  $_SESSION[lvl_akses] = $r[lvl_akses];


  if(($_SESSION[lvl_akses]==admin)){
    header('location:Admin/index.php?admin=home');
  } 
elseif (($_SESSION[lvl_akses]==guru)) {
	header('location:Guru/index.php?admin=home');
}
}
else{
echo "<script>window.alert('Username Atau Password Salah !!!')
    window.location='login.php'</script>";
}
?>
