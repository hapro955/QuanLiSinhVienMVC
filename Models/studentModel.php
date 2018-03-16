<?php
	class student extends database{
		function listStudent(){
			//$conn=mysqli_connect('thuctapphp.com','root','123456','thuctapPHP');
			$sql="SELECT * FROM student WHERE studentStatus=1";
			$result=mysqli_query($this->conn,$sql);
			return $result;
		}
		function addStudent($name, $status){
			// if(isset($_POST['add'])){
			// 	$name=$_POST['studentName'];
			// 	$status=$_POST['studentStatus'];
			// 	$sql ="INSERT INTO student(studentName,studentStatus) VALUES('$name','$status')";
			// 	$result=mysqli_query($this->conn,$sql);
			// 	return $result;
			// 	echo "string";die;
			// }
			$sql ="INSERT INTO student(studentName,studentStatus) VALUES('$name','$status')";
			mysqli_query($this->conn,$sql);		
		}
		function editStudent(){

		}
		function deleteStudent(){}
	}


?>