<?php
session_start();

if(isset($_POST['register'])){
	insert_child();
}

<<<<<<< Updated upstream
function insert_child(){
	$father=$_POST['father'];
	$mother=$_POST['mother'];
	$date=$_POST['date'];
	$sex=$_POST['sex'];
	$contact=$_POST['contact'];
	$hid=$_SESSION['id'] ."/". $_POST['serial'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$pin=$_POST['pin'];
	
	
	//print_r($_POST);
	$con = mysqli_connect("localhost","root","tiger","vaccslove");
	// Check connection
	if (mysqli_connect_errno())
	{
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		$sql_query="INSERT INTO child (hid,mother,father,dob,sex,address,city,state,pin,lat,lng,contact) VALUES('$hid','$mother','$father','$dob','$sex','$address','$city','$state',$pin,0,0,$contact)";
		echo $sql_query;
		if(mysqli_query($con,$sql_query))
		{
			
		
			
			echo "SUCCEESS";
			//redirect to home page	
		}
		else{
			echo mysqli_error($con);	
		}
		mysqli_close($con);	
	}	
}
=======

>>>>>>> Stashed changes
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Child Insertion</title>
</head>

<body>
<form method="post" action="child.php">
	<input type="text" name="father" placeholder="Father's Name" required />
	<input type="text" name="mother" placeholder="Mother's Name" required />
	<input type="text" name="date" placeholder="Date Of Birth" required />
	<input type="text" name="sex" placeholder="Sex" required />
	<input type="text" name="contact" placeholder="Contact Number" required />
	<input type="text" name="serial" placeholder="Serial Number" required />
	<input type="text" name="address" placeholder="Street Address" required />
	<input type="text" name="city" placeholder="City" required />
	<input type="text" name="state" placeholder="State" required />
	<input type="text" name="pin" placeholder="Pincode" required />
	<button name="register">Register</button>
</form>
</body>

</html>