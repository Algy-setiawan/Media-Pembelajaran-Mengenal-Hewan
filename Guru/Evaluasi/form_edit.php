<?php
include ('../koneksi.php');
$kd_marker=$_GET['kd_marker'];
$query=mysql_query("SELECT marker.*,pembelajaran.* FROM pembelajaran INNER JOIN marker ON marker.Kd_pembelajaran=pembelajaran.Kd_pembelajaran where kd_marker='$kd_marker'");



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
                    <h2>Edit Data Materi </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                      <form action="Marker/edit.php"  method= "post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
<?php
while($row=mysql_fetch_array($query)){
?>
                     
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Materi Pembelajaran<span class=>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="Kd_pembelajaran" class="form-control" >
                            <option value="<?php  echo $row['Kd_pembelajaran'];?>"hidden=" <?php echo $row['pembelajaran'];?>" selected="selected" ><?php  echo $row['pembelajaran'];?></option>
              <?php 
      
      $query=mysql_query("select * from pembelajaran order by Kd_pembelajaran asc",$koneksi);
      
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
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Keterangan <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                         <textarea name="keterangan" id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" 
                            data-parsley-validation-threshold="10" ><?php  echo $row['keterangan'];?></textarea>
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
                      <img id="previewing" width="100" height="100" src="../assets/<?php  echo $row['marker'];?>"  />

                      </div>
                      </div>
                <div>
                  <input type="hidden" name="kd_marker" value="<?php  echo $row['kd_marker'];?>">
                </div>
                      <div class="ln_solid"></div>

                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" class="btn btn-success">Submit</button>
              <button class="btn btn-primary" type="reset">Reset</button>
                          
                        </div>
                      </div>
 <?php } ?>
                    </form>


                  </div>
                </div>
              </div>
            </div>
          </div>
         
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

