
<?php
	//lanjutkan session yang sudah dibuat sebelumnya
	session_start();
	unset($_SESSION['id_user']);
	unset($_SESSION['lvl_akses']);
	//hapus session yang sudah dibuat
	session_destroy();

	//redirect ke halaman login
	header('location:/avicenna');
?>
