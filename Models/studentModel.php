<?php
	class student{
		function listStudent(){
			$sql="SELECT * FROM student";
			$result=mysqli_query($conn,$sql);
		}
		function addStudent(){}
		function editStudent(){}
		function deleteStudent(){}
	}

?>