
	<?php 
		include "../../koneksi.php";

		if(isset($_POST['tambah'])){
		
$Kd_pembelajaran = $_POST['Kd_pembelajaran'];
$kelas = $_POST['kelas'];
$keterangan = $_POST['keterangan'];
$filefoto = $_FILES['filefoto']['name'];
$tmp = $_FILES['filefoto']['tmp_name'];
$fotobaru = date('dmYHis').$filefoto;
$path = "../../assets/".$filefoto;

		
			
			if(move_uploaded_file($tmp, $path)){ 

			
			$query=mysql_query("insert into marker(Kd_pembelajaran,marker,kelas,keterangan) values('$Kd_pembelajaran','$filefoto','$kelas','$keterangan')" ,$koneksi);
			
			if($query){
				echo "<br>";
				header('location:../index.php?admin=Marker');
				echo "Berhasil";
			}else{
				echo "gagal";
				echo mysql_error();
			} }

			
		
		}else{
			unset($_POST['tambah']);
		}
		?>