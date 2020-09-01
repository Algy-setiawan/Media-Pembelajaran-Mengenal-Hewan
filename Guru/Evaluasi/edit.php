
<?php ob_start();
include "../../koneksi.php";

$kd_marker = $_POST['kd_marker'];
$marker - $_POST['marker'];
$Kd_pembelajaran = $_POST['Kd_pembelajaran'];
$keterangan = $_POST['keterangan'];
$filefoto = $_FILES['filefoto']['name'];
$tmp = $_FILES['filefoto']['tmp_name'];
$fotobaru = date('dmYHis').$filefoto;
$path = "../../assets/".$filefoto;

if(move_uploaded_file($tmp, $path)){ 

$query=mysql_query("update marker set kd_marker='$kd_marker', Kd_pembelajaran='$Kd_pembelajaran' ,keterangan='$keterangan',marker='$filefoto' where kd_marker='$kd_marker'");
header('location:../index.php?admin=Marker');
}
else{
$query=mysql_query("update marker set kd_marker='$kd_marker', Kd_pembelajaran='$Kd_pembelajaran' ,keterangan='$keterangan' where kd_marker='$kd_marker'");

			header('location:../index.php?admin=Marker');
}
?>