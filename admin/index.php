<?php
	$title = 'Staff Admin Area';
	ob_start();
	include '../templates/admin_home.html.php';
	$output = ob_get_clean();
	include '../templates/admin_layout.html.php';
?>