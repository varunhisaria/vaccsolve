<?php
	$caller=$_GET['From'];
	header("Content-type:text/plain");
	header("HTTP/1.1 200 OK");
	header("Content-Length: 130");
	$response =  "Thank you".$caller;
	echo $response;
?>