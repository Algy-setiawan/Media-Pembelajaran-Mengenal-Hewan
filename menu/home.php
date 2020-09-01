<?php
include ('koneksi.php');

?>
			<!-- //banner -->
			<!-- banner-bottom -->
				<div class="banner-bottom">
					<div class="banner-bottom-grids">
						<div class="col-md-4 banner-bottom-grid">
							<h3>Selamat<span> Datang</span></h3>
							<h2><i>"Selamat Datang di Avicenna Islamic Education Center "</i></h2>
							<p>Dalam perkembangan jaman saat ini, orang tua modern memiliki pekerjaan masing-masing meskipun sudah memiliki anak. Namun masalah yang timbul yaitu ketika anak harus diasuh oleh siapa atau dititipkan ke siapa?saat suami dan istri dua-duanya memiliki pekerjaan. Ada dua kemungkinan yaitu dititip kepada orang tua kita atau di sekolahkan di daycare atau tempat penitipan anak. Syukur-syukur nenek dan kakeknya masih sehat dan kuat untuk mengasuh cucunya, jika tidak daycare menjadi tempat yang paling tepat untuk menitipkan anak kita selagi kita bekerja.
								<span>Sayangnya mencari daycare yang tepat dan murah sangatlah sulit, terutama di bandung. Avicenna Islamic Learning Center membuka Daycare harian, mingguan hingga bulanan bagi orang tua yang mencari Daycare bagi anak-anak mereka. Daycare buka mulai dari jam 7.00 sampai 17.00 jika ada keterlambatan penjemputan akan dikenakan cas 25rb/jam. Daycare dapat diikuti oleh anak bayi umur 3 bulan sampai 2 tahun. Pengasuhnya terdiri dari lulusan Pendidikan anak usia dini dengan pengalaman bekerja lebih dari 10 tahun. Untuk bayi rasio guru dan anak adalah 1:1 sedangkan toddler 1:3.</span></p>
							
						
						</div>

						<div class="col-md-4 banner-bottom-grid">
							<h3>Fasilitas <span>Avicenna</span></h3>
							<div class="load_more">	
								<script>
									$(document).ready(function () {
										size_li = $("#myList li").size();
										x=1;
										$('#myList li:lt('+x+')').show();
										$('#loadMore').click(function () {
											x= (x+1 <= size_li) ? x+1 : size_li;
											$('#myList li:lt('+x+')').show();
										});
										$('#showLess').click(function () {
											x=(x-1<0) ? 1 : x-1;
											$('#myList li').not(':lt('+x+')').hide();
										});
									});
								</script>
								<ul id="myList">
									<li>
										<div class="l_g">
											<?php
    $query_mysql = mysql_query("SELECT * FROM fasilitas LIMIT 3")or die(mysql_error());
    $nomor = 1;
    while($data = mysql_fetch_array($query_mysql)){
?>
											<div class="banner-bottom-grid1">
												<div class="col-xs-4 banner-bottom-grid-left">
													<img src="Assets/fasilitas/<?php echo $data['gambar']; ?>" alt="ss" class="img-responsive" />
												</div>
												<div class="col-xs-8 banner-bottom-grid-left">
													<h4><a href="index.php?menu=fasilitas">Fasilitas <?php echo $data['fasilitas']; ?></a></h4>
												</div>
												<div class="clearfix"> </div>
											</div>

											<?php }?>
											<div class="more">
								<a href='index.php?menu=fasilitas' 
              class="hvr-rectangle-out">Load More</a>
							</div>
												<div class="clearfix"> </div>
											</div>
										</div>
									</li>
								</ul>
									
							</div>
						</div>
						<div class="col-md-4 banner-bottom-grid">
							<h3>Media<span> Pembelajaran</span></h3>
												<div class="banner-bottom-grid-fig">
													<?php
    $query_mysql = mysql_query("SELECT * FROM Pembelajaran LIMIT 3")or die(mysql_error());
    $nomor = 1;
    while($data = mysql_fetch_array($query_mysql)){
?>
		
								<div class="banner-bottom-grid-fig1">
									<img  width='350' height='275' src=assets/<?php echo $data['marker']; ?> alt=" " class="img-responsive" />
									<div class="banner-bottom-grid-fig1-pos">
										<a href="index.php?menu=pembelajaran">Materi <?php echo $data['pembelajaran']; ?></a>
										
									</div>
								</div>
								<?php } ?>
								<div class="more">
								<a href='index.php?menu=pembelajaran' 
              class="hvr-rectangle-out">Load More</a>
							</div>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
			<!-- //banner-bottom -->
			