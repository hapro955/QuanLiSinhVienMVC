<?php
	include_once 'Library/connect.php';
	switch($_GET['controller']){
		case 'addStudent': include_once '/home/www/thuctapphp.com/QuanLiSinhVienMVC/Controllers/addStudent.php';
			break;
		default :
			include_once '/home/www/thuctapphp.com/QuanLiSinhVienMVC/Controllers/listStudent.php';
			break;
	}
	
?>
