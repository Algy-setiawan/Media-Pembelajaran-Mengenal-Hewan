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
                    <h2>Lihat Media Pembelajaran</h2>
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
<td>Media Pembelajaran</td>
<td>Keterangan </td>
<td>Gambar</td>
<td>Flash File</td>



</tr>
                        </thead>
<?php 
    include "../koneksi.php";
    $query_mysql = mysql_query("SELECT * FROM pembelajaran")or die(mysql_error());
    $nomor = 1;
    while($data = mysql_fetch_array($query_mysql)){
    ?>
    <tr>
      <td align="center"><?php echo $nomor++; ?></td>
      <td align="center"><?php echo $data['pembelajaran']; ?></td>
      <td align="center"><?php echo $data['keterangan']; ?></td>
   <td align="center"><img width='150' height='150' src=../assets/<?php echo $data['marker']; ?>></td>
      <td align="center">
        <a href='../Admin/Pembelajaran/<?php echo $data['path']; ?>' onclick="window.open('../Admin/Pembelajaran/<?php echo $data['path']; ?>', 
                         'newwindow', 
                         'width=1024,height=576'); 
              return false;">
        <input type='button' value='Buka' class='btn btn-primary' ></a></td>



      
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