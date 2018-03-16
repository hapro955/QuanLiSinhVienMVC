<?php
	class student extends database{

		function listStudent(){
			$sql = "SELECT * FROM student WHERE studentStatus=1";
			$result = mysqli_query($this->conn,$sql);
			return $result;
		}

		function addStudent($name, $status){
			$sql ="INSERT INTO student(studentName,studentStatus) VALUES('$name','$status')";
			mysqli_query($this->conn,$sql);		
		}

		function editStudent(){

		}
		
		function deleteStudent($id){
			$sql="UPDATE student SET studentStatus=0 WHERE studentId=".$id;
			mysqli_query($this->conn,$sql);
		}
	}


?>