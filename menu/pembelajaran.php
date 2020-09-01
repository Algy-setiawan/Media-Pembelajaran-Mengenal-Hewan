<?php
include ('koneksi.php');

?>
<div class="services">
					<h2>Media Pembelajaran</h2>
					<?php
    $query_mysql = mysql_query("SELECT * FROM pembelajaran")or die(mysql_error());
    $nomor = 1;
    while($data = mysql_fetch_array($query_mysql)){
?>
					<div class="services-grids">
						
						<div class="col-md-4 services-grid-left">
							<td align="center"><img width='350' height='275' src=assets/<?php echo $data['marker']; ?>></td></td>

						</div>
						<div class="col-md-8 services-grid-right">
							<h3>Media Pembelajaran <span><?php echo $data['pembelajaran']; ?></span></h3><br>
							
							
								<p><?php echo $data['keterangan']; ?></p>
								
								<div class="more">
								<a href='Admin/Pembelajaran/<?php echo $data['path']; ?>' onclick="window.open('Admin/Pembelajaran/<?php echo $data['path']; ?>', 
                         'newwindow', 
                         'width=1024,height=576'); 
              return false;"" class="hvr-rectangle-out">Buka</a>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="clearfix"> </div>
					</div><br>
					<?php } ?>

					