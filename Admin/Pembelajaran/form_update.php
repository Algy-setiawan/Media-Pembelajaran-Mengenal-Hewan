<?php
include ('../koneksi.php');
 include 'functions.php';
?>
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Halaman Media Pembelajaran</h3>
              </div>

           
          <div class="clearfix"></div>
               <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Update Multimedia Pembelajaran</h2>
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

<td>Modul</td>
<td>Flash</td>
<td>Update</td>
<td>Action</td>



</tr>
                        </thead>
<?php 
    include "koneksi.php";
    $Kd_pembelajaran = $_GET['Kd_pembelajaran'];
  
    $query_mysql = mysql_query("SELECT * FROM pembelajaran where Kd_pembelajaran = '$Kd_pembelajaran'")or die(mysql_error());
    $nomor = 1;
    while($data = mysql_fetch_array($query_mysql)){
    ?>
    <tr>
      <td align="center">Materi</td>
      <td align="center"><a href='' onclick="window.open('../Admin/Pembelajaran/<?php echo $data['path']; ?>/../Konten/Materi/Materi.php', 
                         'newwindow', 
                         'width=1024,height=576'); 
              return false;">
        <input type='button' value='Buka' class='btn btn-primary' ></a></td>

       <td align="center">
          <div class="col-md-6 col-sm-6 col-xs-12">
                         <form action="pembelajaran/update_materi.php" method="post" enctype="multipart/form-data">
                          <input type="file" id="fileZip4" name="uploadmateri"  class="form-control col-md-7 col-xs-12">** Upload File Materi.ZIP

                        </div>
        </td>
        <td align="center">
        <input type="text" name="Kd_pembelajaran" value="<?php echo $data['Kd_pembelajaran'];?>" hidden>
        <input type='submit' value='Update' name="update" class='btn btn-success' ></a></form>

        <a href='pembelajaran/hapus_update.php?path=<?php echo $data['path'];?>Konten/Materi/' onclick="return confirm_delete()">
        <input type='button' value='Hapus' class='btn btn-danger' ></a>
      
        
      </td>
    </tr>
    <tr>
      <td align="center">Video</td>
      <td align="center"><a href='' onclick="window.open('../Admin/Pembelajaran/<?php echo $data['path']; ?>/../Konten/Video/Video.php', 
                         'newwindow', 
                         'width=1024,height=576'); 
              return false;">
        <input type='button' value='Buka' class='btn btn-primary' ></a></td>
        <td align="center">
          <div class="col-md-6 col-sm-6 col-xs-12">
                          <form action="pembelajaran/update_video.php" method="post" enctype="multipart/form-data">
                          <input type="file" id="fileZip4" name="uploadvideo"  class="form-control col-md-7 col-xs-12">** Upload File Video.ZIP

                        </div>
        </td>
        <td align="center">
        <input type="text" name="Kd_pembelajaran" value="<?php echo $data['Kd_pembelajaran'];?>" hidden>
        <input type='submit' value='Update' name="update" class='btn btn-success' ></a></form>

        <a href='pembelajaran/hapus_update.php?path=<?php echo $data['path'];?>Konten/Video/' onclick="return confirm_delete()">
        <input type='button' value='Hapus' class='btn btn-danger' ></a>
      
        
      </td>
    </tr>
    <tr>
      <td align="center">Permainan</td>
      <td align="center"><a href='' onclick="window.open('../Admin/Pembelajaran/<?php echo $data['path']; ?>/../Konten/Permainan/Permainan.php', 
                         'newwindow', 
                         'width=1024,height=576'); 
              return false;">
        <input type='button' value='Buka' class='btn btn-primary' ></a></td>
        <td align="center">
          <div class="col-md-6 col-sm-6 col-xs-12">

            <form action="pembelajaran/update_permainan.php" method="post" enctype="multipart/form-data">
                          <input type="file" id="fileZip3" name="uploadpermainan"  class="form-control col-md-7 col-xs-12">** Upload File Permainan.ZIP

                        </div>
        </td>
        <td align="center">
        <input type="text" name="Kd_pembelajaran" value="<?php echo $data['Kd_pembelajaran'];?>" hidden>
        <input type='submit' value='Update' name="update" class='btn btn-success' ></a></form>

        <a href='pembelajaran/hapus_update.php?path=<?php echo $data['path'];?>Konten/Permainan/' onclick="return confirm_delete()">
        <input type='button' value='Hapus' class='btn btn-danger' ></a>
      
        
      </td>
    </tr>
    <tr>
      <td align="center">Latihan</td>
      <td align="center"><a href='' onclick="window.open('../Admin/Pembelajaran/<?php echo $data['path']; ?>/../Konten/Latihan/Latihan.php', 
                         'newwindow', 
                         'width=1024,height=576'); 
              return false;">
        <input type='button' value='Buka' class='btn btn-primary' ></a></td>
        <td align="center">
          <div class="col-md-6 col-sm-6 col-xs-12">
                         <form action="pembelajaran/update_latihan.php" method="post" enctype="multipart/form-data">
                          <input type="file" id="fileZip4" name="uploadlatihan"  class="form-control col-md-7 col-xs-12">** Upload File Latihan.ZIP

                        </div>
        </td>
        <td align="center">
        <input type="text" name="Kd_pembelajaran" value="<?php echo $data['Kd_pembelajaran'];?>" hidden>
        <input type='submit' value='Update' name="update" class='btn btn-success' ></a></form>

        <a href='pembelajaran/hapus_update.php?path=<?php echo $data['path'];?>Konten/Latihan/' onclick="return confirm_delete()">
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