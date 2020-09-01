
	<?php 
		include "../../koneksi.php";

		if(isset($_POST['tambah'])){
		
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$filefoto = $_FILES['filefoto']['name'];
$tmp = $_FILES['filefoto']['tmp_name'];
$fotobaru = date('dmYHis').$filefoto;
$path = "../../assets/galeri/".$filefoto;

		
			
			if(move_uploaded_file($tmp, $path)){ 

			
			$query=mysql_query("insert into galeri(judul,deskripsi,gambar) values('$judul','$deskripsi','$filefoto')" ,$koneksi);
			
			if($query){
				echo "<br>";
				header('location:../index.php?admin=Galeri');
				echo "Berhasil";
			}else{
				echo "gagal";
				echo mysql_error();
			} }

			
		
		}else{
			unset($_POST['tambah']);
		}
		?>