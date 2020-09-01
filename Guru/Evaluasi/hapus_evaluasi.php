<?php

 include "../../koneksi.php";
 mysql_query("delete from evaluasi where id_evaluasi='$_GET[id_evaluasi]'");

 header('location:../index.php?admin=Evaluasi');

?>