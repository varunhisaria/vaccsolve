<?php

include 'db_connect.php';

session_start();

if(isset($_POST['signup'])){
	register();
}
else if(isset($_POST['login'])){
	login();
}
else if(isset($_POST['logout'])){
	$_SESSION['id']="";
	$_SESSION['type']="";
}

function register(){
	$name=$_POST['name'];
	$pswrd=$_POST['pswrd'];
	$cnf_pswrd=$_POST['cnf_pswrd'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$pin=$_POST['pin'];
	$contact=$_POST['contact'];
	print_r($_POST);
	$con = mysqli_connect("localhost","root","tiger","vaccslove");
	// Check connection
	if (mysqli_connect_errno())
	{
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		$sql_query="INSERT INTO hospital (name,pswrd,address,city,state,pin,lat,lng,contact) VALUES('$name','$pswrd','$address','$city','$state',$pin,0,0,$contact)";
		echo $sql_query;
		if(mysqli_query($con,$sql_query))
		{
			
			$id=mysqli_insert_id($con);
			$_SESSION['id']=$id;
			$_SESSION['type']="hospital";
			echo "SUCCEESS".$id;
			//redirect to home page	
		}
		else{
			echo mysqli_error($con);	
		}
		mysqli_close($con);	
	}	
}

function login(){
	$id=$_POST['id'];
	$pswrd=$_POST['pswrd'];
	$con = mysqli_connect("localhost","root","tiger","vaccslove");
	// Check connection
	if (mysqli_connect_errno())
	{
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		$sql_query="SELECT pswrd from hospital where id='" . $id. "'";
		if($result= mysqli_query($con,$sql_query)){
			if(mysqli_num_rows($result)>0){
				$row=mysqli_fetch_assoc($result);
				//echo $row['pswrd'];
				if($row['pswrd']==$pswrd){
					echo "Welcome";
					$_SESSION['id']=$id;
					$_SESSION['type']="hospital";
					//redirect to home
				}
				else{
					echo "Invalid password";
				}
			}
			else{
				echo "User does not exist";
			}
		}
		else{
			echo mysql_error($con);
		}
	}
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Hospital Registration</title>
</head>
<body>

<form method="post" action="hospital.php">
	<input type="text" name="name" placeholder="Hospital Name" required />
	<input type="password" name="pswrd" placeholder="Password" required />
	<input type="password" name="cnf_pswrd" placeholder="Confirm Password" required />
	<input type="text" name="address" placeholder="Street Address" required />
	<input type="text" name="city" placeholder="City" required />
	<input type="text" name="state" placeholder="State" required />
	<input type="text" name="pin" placeholder="Pincode" required />
	<input type="text" name="contact" placeholder="Contact Number" required />
	<button name="signup">Register</button>
</form>

<br/>


<form method="post" action="hospital.php">
	<input type="text" name="id" placeholder="id" required />
	<input type="password" name="pswrd" placeholder="password" required />
	<button name="login">Login</button>
</form>

<br/>



<form method="post" action="hospital.php">
	<input type="text" name="name" placeholder="Hospital Name" required />
	<input type="text" name="address" placeholder="Street Address" required />
	<input type="text" name="city" placeholder="City" required />
	<input type="text" name="state" placeholder="State" required />
	<input type="text" name="pin" placeholder="Pincode" required />
	<input type="text" name="contact" placeholder="Contact Number" required />
	<button name="signup">Register</button>
</form>



</body>
</html>