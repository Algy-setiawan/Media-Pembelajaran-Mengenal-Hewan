<?php
mysql_connect("localhost","root","");
mysql_select_db("avicenna"); //nama database yang kita buat
 
$tanggal = date("Y-m-d");
$nama = $_POST['nama']; 
$poin = $_POST['poin'];
$latihan = $_POST['latihan'];
$kelas = $_POST['kelas']; 
$materi = $_POST['materi']; 
 
$simpan=mysql_query("INSERT INTO evaluasi(materi,latihan,nama,nilai,tanggal,kelas) VALUES ('$materi','$latihan','$nama','$poin','$tanggal','$kelas')");
 


?>