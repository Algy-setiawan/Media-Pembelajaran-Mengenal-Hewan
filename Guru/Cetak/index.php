<?php
include ('../koneksi.php');
error_reporting(0);
?>
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    
                    </span>
                  </div>
                </div>
              </div>
            </div>





            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Cetak Data Evaluasi</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <section class="content invoice">
                      <!-- title row -->
                      <div class="row">
                        <div class="col-xs-12 invoice-header">
                          <h1>
                                           Avicenna Islamic Education Center
                                          <small class="pull-right">Tanggal: <?php 
                                          date_default_timezone_set("Asia/Bangkok");
                                          echo date("Y/m/d")
                                           ?></small>
                                      </h1>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                         
                          <address>
                                          
                                          Jl. Cikutra Baru 3 No. 19. 
                                          <br>Neglasari,Cibeunying Kaler
                                          <br>Kota Bandung, Jawa Barat 40132
                                          <br>Phone:(022) 2509030
                                         <br> <br><strong>Materi :<?php
	$materi=$_POST['materi'];
                                          echo $materi ?>
<br>kelas :<?php
	$kelas=$_POST['kelas'];
                                          echo $kelas ?>
                                      

                                         <br>Latihan :<?php
	$latihan=$_POST['latihan'];
                                          echo $latihan ?></strong>
                                      </address>
                        </div>
                        <!-- /.col -->
                        
                        <!-- /.col -->
                        
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- Table row -->
                      <div class="row">
                        <div class="col-xs-12 table">
                          <table class="table table-striped">
                            <thead align="center">
                              <tr>
                                 
<td>No</td>
<td>Tanggal</td>
<td>Nama</td>
<td>Kelas</td>

<td>Nilai</td>
<?php 
	

	$materi=$_POST['materi'];
;
	$latihan=$_POST['latihan']; 

    $query_mysql = mysql_query("SELECT * FROM evaluasi where materi = '$materi' AND latihan = '$latihan' ORDER BY nama asc")or die(mysql_error());
    $nomor = 1;
    while($data = mysql_fetch_assoc($query_mysql)) {

    ?>
    <tr>
      <td align="center"><?php echo $nomor++; ?></td>
      <td align="center"><?php echo $data['tanggal']; ?></td>
      <td align="center"><?php echo $data['nama']; ?></td>
      <td align="center"><?php echo $data['kelas']; ?></td>
      <td align="center"><?php echo $data['nilai']; ?></td>

  
    
      
    </tr>
    <?php } ?>


</tr>
                        </thead>

                        
                          </table>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <div class="row">
                        <!-- accepted payments column -->
                       
                        <!-- /.col -->
                        
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- this row will not appear when printing -->
                      <div class="row no-print">
                        <div class="col-xs-12">
                           <?php $materi=$_POST['materi'];
							$latihan=$_POST['latihan']; {?>


                          <a href="Cetak/evaluasi.php?materi=<?php echo $materi ?>&latihan=<?php echo $latihan ?>"><i class="fa fa-print"></i> PDF</a>

                          <?php }?>
                        </div>
                      </div>
                    </section>  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->