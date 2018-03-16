<?php
	
	
	//include_once "/home/www/thuctapphp.com/QuanLiSinhVienMVC/Views/studentAddView.php";
	
	if(isset($_POST['add'])){
		//echo "stringok";die;
		$name=$_POST['studentName'];
		$status=$_POST['studentStatus'];
		include_once "/home/www/thuctapphp.com/QuanLiSinhVienMVC/Models/studentModel.php";
		$student = new student();
		$student->listStudent($name, $status);
	}
	
	
	include_once "/home/www/thuctapphp.com/QuanLiSinhVienMVC/Views/studentListView.php";
?>