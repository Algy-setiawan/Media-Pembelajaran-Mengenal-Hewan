<?php
$path = $_GET['path'];

 include "../../koneksi.php";
unlink($_GET['path'] .'/' .$_GET['modul']); 
// unlink('extracted/MengenalHewan/Konten/Permainan/' .$_GET['modul']); 
?>