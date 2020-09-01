
	<?php 
		include "../../koneksi.php";

		if(isset($_POST['tambah'])){
		
$Fasilitas = $_POST['Fasilitas'];
$filefoto = $_FILES['filefoto']['name'];
$tmp = $_FILES['filefoto']['tmp_name'];
$fotobaru = date('dmYHis').$filefoto;
$path = "../../assets/fasilitas/".$filefoto;

		
			
			if(move_uploaded_file($tmp, $path)){ 

			
			$query=mysql_query("insert into fasilitas(fasilitas,gambar) values('$Fasilitas','$filefoto')" ,$koneksi);
			
			if($query){
				echo "<br>";
				header('location:../index.php?admin=Fasilitas');
				echo "Berhasil";
			}else{
				echo "gagal";
				echo mysql_error();
			} }

			
		
		}else{
			unset($_POST['tambah']);
		}
		?>