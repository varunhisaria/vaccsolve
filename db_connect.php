<?php
	function open_connection(){
		$con = mysqli_connect("localhost","root","tiger","vaccslove");
		// Check connection
		if (mysqli_connect_errno())
		{
	  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		else{
			return $con;
		}
	}
?>
