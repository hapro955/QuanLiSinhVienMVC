<?php
	if(isset($_POST['add'])){
		$name=$_POST['studentName'];
		$status=$_POST['studentStatus'];
		$student = new student();
		$query = $student->addStudent($name, $status);
		header('Location: http://thuctapphp.com/QuanLiSinhVienMVC/index.php?controller=listStudent');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="#" method="POST" >
		<table>
			<tr>
				Name: <input type="text" name="studentName">
			</tr>
			<tr>
				Status: <input type="number" name="studentStatus" value="1">
			</tr>
		</table>
			<input type="submit" name="add">
	</form>
</body>
</html>