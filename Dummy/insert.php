<?php
mysql_connect("localhost","root","");
mysql_select_db("avicenna"); //nama database yang kita buat
 

 
 $NIP=$_POST['NIP'];
 $Nama=$_POST['Nama'];
 
$simpan=mysql_query("INSERT INTO guru(NIP,Nama) VALUES ('$NIP','$Nama')");
 


?>