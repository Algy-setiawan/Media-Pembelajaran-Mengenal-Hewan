<?php
include ('koneksi.php');

?>
<!-- gallery -->
				<div class="gallery">
					<h2>Gallery</h2>
					<div class="gallery-grids">
						<section>
							<ul id="da-thumbs" class="da-thumbs">
<?php
    $query_mysql = mysql_query("SELECT * FROM galeri")or die(mysql_error());
    $nomor = 1;
    while($data = mysql_fetch_array($query_mysql)){
?>
								<li>
									<a href="Assets/galeri/<?php echo $data['gambar']; ?>"  rel="title" class="b-link-stripe b-animate-go  thickbox">
										<td align="center"><img width='640' height='250' src=Assets/galeri/<?php echo $data['gambar']; ?>></td></td><div>
											<h5><?php echo $data['judul']; ?></h5>
											<span><?php echo $data['deskripsi']; ?></span>
										</div>
									</a>
								</li>
								<?php } ?>
								
								<div class="clearfix"> </div>
							</ul>
						</section>
					</div>
						<!-- pop-up-script -->
							<script src="js/jquery.chocolat.js"></script>
							<!--light-box-files -->
							<script type="text/javascript" charset="utf-8">
							$(function() {
								$('.gallery a').Chocolat();
							});
							</script>
						<!-- //pop-up-script -->
						<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
						<script type="text/javascript">
							$(function() {
							
								$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );

							});
						</script>
				</div>
			<!-- //gallery -->