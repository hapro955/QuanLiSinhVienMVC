<?php
	
	include_once "/home/www/thuctapphp.com/QuanLiSinhVienMVC/Models/studentModel.php";
	if(isset($_POST['add'])){
		$name = $_POST['studentName'];
		$status = $_POST['studentStatus'];
		$student = new student();
		$query = $student->addStudent($name, $status);
		header('Location: http://thuctapphp.com/QuanLiSinhVienMVC/index.php?controller=listStudent');
	}
	include_once "/home/www/thuctapphp.com/QuanLiSinhVienMVC/Views/studentAddView.php";
?>