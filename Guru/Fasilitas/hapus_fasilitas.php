<?php

 include "../../koneksi.php";
 mysql_query("delete from fasilitas where kd_fasilitas='$_GET[kd_fasilitas]'");

 header('location:../index.php?admin=Fasilitas');

?>