
<?php ob_start();
include "../../koneksi.php";

$kd_fasilitas = $_POST['kd_fasilitas'];
$fasilitas = $_POST['fasilitas'];
$gambar = $_POST['gambar'];
$filefoto = $_FILES['filefoto']['name'];
$tmp = $_FILES['filefoto']['tmp_name'];
$fotobaru = date('dmYHis').$filefoto;
$path = "../../assets/Fasilitas/".$filefoto;

if(move_uploaded_file($tmp, $path)){ 

$query=mysql_query("update fasilitas set kd_fasilitas='$kd_fasilitas', fasilitas='$fasilitas', gambar='$filefoto' where kd_fasilitas='$kd_fasilitas'");
header('location:../index.php?admin=Fasilitas');
}
else{
$query=mysql_query("update fasilitas set kd_fasilitas='$kd_fasilitas', fasilitas='$fasilitas' where kd_fasilitas='$kd_fasilitas'");

			header('location:../index.php?admin=Fasilitas');
}
?>