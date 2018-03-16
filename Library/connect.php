<?php
	class database{
		var $conn="";
		function database(){
			$this->conn=mysqli_connect('thuctapphp.com','root','123456','thuctapPHP');
			return $this->conn;		
		}
		
	}
?>
