<?php
$host = "localhost";
$user ="root";
$password ="";
$database = "avicenna";
$koneksi = mysql_connect($host,$user,$password) or die("Koneksi Gagal");
mysql_select_db($database,$koneksi) or die("Tdk ada Database");
?>