<?php
include ('../koneksi.php');

?>
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Halaman Data Evaluasi</h3>
              </div>

<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Evaluasi</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                      <form action="?admin=Cetak"  method= "post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      
                      
                      
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Media Pembelajaran <span class=>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="materi" class="form-control" required="">
                            <option value=" "hidden=" <?php echo $row['jabatan'];?>" selected="selected" >Pilih Media Pembelajaran</option>
              <?php 
      
      $query=mysql_query("SELECT * FROM pembelajaran",$koneksi);
      
      while($var=mysql_fetch_array($query))
      {
        ?>
              <option value="<?php  echo $var['pembelajaran']; ?>">
              <?php  echo $var['pembelajaran']; ?>
              </option>
              <?php 
      }
      ?>
  </select>
                        </div>
                      </div>

                      


                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Latihan <span class=>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="latihan" class="form-control" >
                            <option value=""hidden="" selected="selected" >Pilih Latihan</option>
             
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
  </select>
                        </div>
                      </div>



                    
                     
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="tambah" class="btn btn-success">Submit</button>
              <button class="btn btn-primary" type="reset">Reset</button>
                          
                        </div>
                        </form>
                      </div>

                  
                  </div>
                </div>
              </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Evaluasi Siswa</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                      <form action="?admin=Cetakk"  method= "post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                      
                      
                      
                     <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Media Pembelajaran <span class=>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="materi" class="form-control" required="">
                            <option value=" "hidden=" <?php echo $row['jabatan'];?>" selected="selected" >Pilih Media Pembelajaran</option>
              <?php 
      
      $query=mysql_query("SELECT * FROM pembelajaran",$koneksi);
      
      while($var=mysql_fetch_array($query))
      {
        ?>
              <option value="<?php  echo $var['pembelajaran']; ?>">
              <?php  echo $var['pembelajaran']; ?>
              </option>
              <?php 
      }
      ?>
  </select>
                        </div>
                      </div>

                      


                    

<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Nama <span class=>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="nama" class="form-control">
                            <option value=" "hidden=" <?php echo $row['nama'];?>" selected="selected" >Pilih Nama</option>
              <?php 
      
      $query=mysql_query("SELECT DISTINCT nama FROM evaluasi",$koneksi);
      
      while($var=mysql_fetch_array($query))
      {
        ?>
              <option value="<?php  echo $var['nama']; ?>">
              <?php  echo $var['nama']; ?>
              </option>
              <?php 
      }
      ?>
  </select>
                        </div>
                      </div>

                    
                     
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="tambah" class="btn btn-success">Submit</button>
              <button class="btn btn-primary" type="reset">Reset</button>
                          
                        </div>
                        </form>
                  </div></div></div>
                </form></div></div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  
                </div>
              </div>
            </div>
            
          <div class="clearfix"></div>
               <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lihat Data Evaluasi</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                 

                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30"> 
                    </p>
                    <table id="datatable" class="table table-striped jambo_table bulk_action">
                      <thead align="center">
                        <tr>

<td>Tanggal</td>
<td>Nama</td>
<td>Kelas</td>
<td>Media Pembelajaran</td>
<td>Latihan</td>
<td>Nilai</td>


<td>Action</td>

</tr>
                        </thead>

                       <?php 

    $query_mysql = mysql_query("SELECT * FROM evaluasi ORDER BY latihan,materi,nama ASC")or die(mysql_error());
    $nomor = 1;
    while($data = mysql_fetch_array($query_mysql)){
    ?>
    <tr>
      <td align="center"><?php echo $data['tanggal']; ?></td>
      <td align="center"><?php echo $data['nama']; ?></td>
      <td align="center"><?php echo $data['kelas']; ?></td>
       <td align="center"><?php echo $data['materi']; ?></td>
       <td align="center"><?php echo $data['latihan']; ?></td>
       <td align="center"><?php echo $data['nilai']; ?></td>
      
    
      <td align="center">
       

<a href='Evaluasi/hapus_evaluasi.php?id_evaluasi=<?php echo $data['id_evaluasi']; ?>' onclick="return confirm_delete()">
        <input type='button' value='Hapus' class='btn btn-danger' ></a>
      
        
    
      
        
      </td>
    </tr>
    <?php } ?>

                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

<script type="text/javascript">
function confirm_delete() {
  return confirm('Yakin Mau Dihapus ?');
}
</script>