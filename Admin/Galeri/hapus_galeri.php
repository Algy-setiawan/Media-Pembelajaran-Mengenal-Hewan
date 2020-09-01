<?php

 include "../../koneksi.php";
 mysql_query("delete from galeri where kd_galeri='$_GET[kd_galeri]'");

 header('location:../index.php?admin=Galeri');

?>