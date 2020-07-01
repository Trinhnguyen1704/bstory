<?php
	session_start();
	ob_start();
	session_destroy();
	header('location:/admin/auth/login.php');
	ob_end_flush();
?>