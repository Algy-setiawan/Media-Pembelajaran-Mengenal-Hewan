<?php
include ('../koneksi.php');

?>
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Halaman Data Materi</h3>
              </div>

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
                    <h2>Tambah Data Materi </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                      <form action="Marker/tambah_marker.php"  method= "post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                    

                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Multimedia Pembelajaran <span class=>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="Kd_pembelajaran" class="form-control" required="">
                            <option value=" "hidden=" <?php echo $row['jabatan'];?>" selected="selected" >Pilih Multimedia Pembelajaran</option>
              <?php 
			
			$query=mysql_query("select * from pembelajaran order by kd_pembelajaran asc",$koneksi);
			
			while($var=mysql_fetch_array($query))
			{
				?>
              <option value="<?php  echo $var['Kd_pembelajaran']; ?>">
              <?php  echo $var['pembelajaran']; ?>
              </option>
              <?php 
			}
			?>
	</select>
                        </div>
                      </div>


                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Kelas <span class=>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="kelas" class="form-control" required="">
                            <option value=""hidden="" selected="selected" >Pilih Kelas</option>
             
                            <option value="TK-A">TK-A</option>
                            <option value="TK-B">TK-B</option>
  </select>
                        </div>
                      </div>




                      
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Keterangan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <textarea name="keterangan" id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                            data-parsley-validation-threshold="10"></textarea>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Gambar <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="file" id="file" name="filefoto"  class="form-control col-md-7 col-xs-12">

                        </div>
                      </div>
                      


                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name"> <span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                      <img id="previewing" width="100" height="100" src="../assets/default.png"  />

                      </div>
                      </div>



                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success" name="tambah">Submit</button>
						  <button class="btn btn-primary" type="reset">Reset</button>
                          
                        </div>
                      </div>

                    </form>


                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
               <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lihat Data Materi</h2>
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

<td>No</td>
<td>Materi Pembelajaran</td>
<td>Kelas</td>
<td>Keterangan</td>
<td>Gambar</td>

<td>Action</td>

</tr>
                        </thead>

                       <?php 

    $query_mysql = mysql_query("SELECT marker.*,pembelajaran.* FROM pembelajaran INNER JOIN marker ON marker.Kd_pembelajaran=pembelajaran.Kd_pembelajaran")or die(mysql_error());
    $nomor = 1;
    while($data = mysql_fetch_array($query_mysql)){
    ?>
    <tr>
      <td align="center"><?php echo $nomor++; ?></td>
      <td align="center"><?php echo $data['pembelajaran']; ?></td>
      <td align="center"><?php echo $data['kelas']; ?></td>
       <td align="center"><?php echo $data['keterangan']; ?></td>
      <td align="center"><img width='150' height='150' src=../assets/<?php echo $data['marker']; ?>></td></td>
    
      <td align="center">
        <a href='index.php?admin=form_edit&kd_marker=<?php echo $data['kd_marker']; ?>'">
        <input type='button' value='Edit' class='btn btn-primary' ></a>

<a href='Marker/hapus_marker.php?kd_marker=<?php echo $data['kd_marker']; ?>' onclick="return confirm_delete()">
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