<?php
include ('../../koneksi.php');
include ('../../session.php');
 $materi=$_GET['materi'];
 $nama=$_GET['nama'];
$query = mysql_query("SELECT * FROM evaluasi where nama = '$nama' AND materi = '$materi'");
?>
<!-- page content -->
<!DOCTYPE html>
<html>
<head>
  <title>Evaluasi</title>
 
    <style>
 table{
 border: 1px solid black;
 border-collapse: collapse

 }
 table td{
  border: 1px solid black;
   border-collapse: collapse


 }
</style>
</head>
<body>
<div align="center">
  <img src="../../Assets/Logo.png" style="float: center;" width="175 " height="175"> 
<h2>DATA NILAI SISWA<br> AVICENNA ISLAMIC EDUCATION CENTER</h2> 
</div>
<div>
                                         
Jl. Cikutra Baru 3 No. 19. 
<br>Neglasari,Cibeunying Kaler
<br>Kota Bandung, Jawa Barat 40132
<br>Phone:(022) 2509030
<br><br><strong>Tanggal Cetak: <?php date_default_timezone_set("Asia/Bangkok"); echo date("d/m/Y")?><br>
Materi :<?php
  $materi=$_GET['materi'];
                                          echo $materi ?>
<br>Nama :<?php
  $nama=$_GET['nama'];
                                          echo $nama ?>
  </strong>
<hr>
</div> 
<table align="center">

 <tr>
                                 

<td width="50" bgcolor="grey"><b>No</b></td>
<td width="120" bgcolor="grey"><b>Nama</b></td>
<td width="120" bgcolor="grey"><b>Tanggal</b></td>
<td width="75" bgcolor="grey"><b>Kelas</b></td>
<td width="75" bgcolor="grey"><b>Latihan</b></td>
<td width="100" bgcolor="grey"><b>nilai</b></td>

</tr>
<?php
 $nomor = 1;
while($data = mysql_fetch_array($query)){
?>
  <tr>
    
    <td><?php echo $nomor++; ?></td>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['tanggal']; ?></td>
    <td><?php echo $data['kelas']; ?></td>
    <td><?php echo $data['latihan']; ?></td>
     <td><?php echo $data['nilai']; ?></td>

    
   
   </tr>
<?php
  
}
?> 
</table>  
<br>
<div align="right" style="padding-right: 10px;">
 
Bandung, <?php date_default_timezone_set("Asia/Bangkok");echo date("d/m/Y")?></div>
<div align="right" style="padding-right: 60px;">
Guru,</div><br><br>
<div align="right" style="padding-right: 20px;">(_____________)

</div>
</body>
</html>
<?php

$content = ob_get_clean();
$tangal = date('Y-m-d h:i:s');
$filename= "Evaluasi-".$tangal.".pdf";
require_once("../../html2pdf/html2pdf.class.php");
$pdf=new HTML2PDF('p','A4','fr','UTF-8');
$pdf->writeHTML($content);
$pdf->pdf->IncludeJS('print(TRUE)');
$pdf->output($filename);
?>
