<?php
include ('koneksi.php');

?>
<div class="services">
					<h2>Fasilitas</h2>
					<?php
    $query_mysql = mysql_query("SELECT * FROM fasilitas")or die(mysql_error());
    $nomor = 1;
    while($data = mysql_fetch_array($query_mysql)){
?>
					<div class="services-grids">
						
						<div class="col-md-4 services-grid-left">

							<td align="center"><img width='250' height='320' class="img-responsive" src=assets/fasilitas/<?php echo $data['gambar']; ?>></td>
						</div>
						<div class="col-md-8 services-grid-right">
							<h3>Fasilitas <span><?php echo $data['fasilitas']; ?></span></h3><br>

							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
					</div><br>
					 	 	 <?php } ?>

					