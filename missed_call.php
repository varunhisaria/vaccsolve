<?php
	$caller=$_GET['From'];
	header("Content-type:text/plain");
	$response =  "Thank you".$caller;
	echo $response;
?>