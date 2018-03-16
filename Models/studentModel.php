<?php
	class student extends database{
		function listStudent(){
			//$conn=mysqli_connect('thuctapphp.com','root','123456','thuctapPHP');
			$sql="SELECT * FROM student";
			$result=mysqli_query($this->conn,$sql);
			return $result;
		}
		function addStudent(){}
		function editStudent(){}
		function deleteStudent(){}
	}

?>