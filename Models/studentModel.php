<?php
	class student{
		function listStudent(){
			$sql="SELECT * FROM student";
			$result=mysqli_query($conn,$sql);
			return $result;
		}
		function addStudent(){}
		function editStudent(){}
		function deleteStudent(){}
	}

?>