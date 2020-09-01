<?php

 include "../../koneksi.php";
 mysql_query("delete from marker where kd_marker='$_GET[kd_marker]'");

 header('location:../index.php?admin=Marker');

?>