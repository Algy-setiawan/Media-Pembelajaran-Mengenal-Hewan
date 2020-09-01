
<?php ob_start();
include "../../koneksi.php";

$kd_galeri = $_POST['kd_galeri'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$gambar = $_POST['gambar'];
$filefoto = $_FILES['filefoto']['name'];
$tmp = $_FILES['filefoto']['tmp_name'];
$fotobaru = date('dmYHis').$filefoto;
$path = "../../assets/galeri/".$filefoto;

if(move_uploaded_file($tmp, $path)){ 

$query=mysql_query("update galeri set kd_galeri='$kd_galeri', judul='$judul', deskripsi='$deskripsi', gambar='$filefoto' where kd_galeri='$kd_galeri'");
header('location:../index.php?admin=Galeri');
}
else{
$query=mysql_query("update galeri set kd_galeri='$kd_galeri', judul='$judul', deskripsi='$deskripsi' where kd_galeri='$kd_galeri'");
header('location:../index.php?admin=Galeri');
}
?>