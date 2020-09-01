<?php
$dir = $_GET['path'];
$files1 = glob($dir.'/*');
$files = glob($dir.'/*'.'/*'); //get all file names 

foreach($files as $file){
    if(is_file($file))
    unlink($file); 

	rmdir($file);
	rmdir($dir);
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}
foreach($files1 as $file1){
    if(is_file($file1))
    unlink($file1); 

	rmdir($file1);
	rmdir($dir);
 header('Location: ' . $_SERVER['HTTP_REFERER']);
}
// rmdir($dir); 
//header('Location: ' . $_SERVER['HTTP_REFERER'])
// unlink('extracted/MengenalHewan/Konten/Permainan/' .$_GET['modul']); 
// header('location:../index.php?admin=Pembelajaran');

?>