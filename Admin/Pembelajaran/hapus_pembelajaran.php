<?php

 include "../../koneksi.php";

 mysql_query("delete from pembelajaran where Kd_pembelajaran='$_GET[Kd_pembelajaran]'");

 header('location:../index.php?admin=Pembelajaran');

?>