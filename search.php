<?php

include 'db_connect.php';

search_pin(700048);
search_state("West Bengal");
search_city("Kolkata");

function search($field,$value){
	$con=open_connection();
	$sql_query="SELECT * from child where ". $field. "=". $value;
	//echo $sql_query;
	if($result= mysqli_query($con,$sql_query)){
		if(mysqli_num_rows($result)>0){
			$row=mysqli_fetch_assoc($result);
			echo mysqli_num_rows($result);
			//display here
		}
		else{
			echo "No results found";
		}
	}
	else{
		echo mysql_error($con);
	}
}

function search_pin($value){
	//echo $pin;
	search("pin",$value);
}

function search_city($value){
	//echo $pin;
	search("city","'$value'");
}

function search_state($value){
	//echo $pin;
	search("state","'$value'");
}

?>