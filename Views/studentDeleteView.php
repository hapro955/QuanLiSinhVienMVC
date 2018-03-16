<?php
	if(isset($_GET['id'])){
		$id =$_GET['id'];
		$student= new student();
		$query=$student->deleteStudent($id);
		header('Location: http://thuctapphp.com/QuanLiSinhVienMVC/index.php?controller=listStudent');
	}

?>