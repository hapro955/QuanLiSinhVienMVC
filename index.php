<?php
	include_once '/home/www/thuctapphp.com/QuanLiSinhVienMVC/Library/connect.php';
	switch($_GET['controller']){
		case 'addStudent': include_once '/home/www/thuctapphp.com/QuanLiSinhVienMVC/Controllers/addStudent.php';
			break;
		case 'listStudent': include_once '/home/www/thuctapphp.com/QuanLiSinhVienMVC/Controllers/listStudent.php';
			break;
	}
	
?>
