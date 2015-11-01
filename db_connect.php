<?php
	function open_connection(){
		$con = mysqli_connect("ap-cdbr-azure-southeast-a.cloudapp.net","bd98cbac27a25d","4bf0227e","vaccsolve");
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
