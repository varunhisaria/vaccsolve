<?php
session_start();


if(isset($_POST['signup'])){
	register();
}
else if(isset($_POST['login'])){
	login();
}
else if(isset($_POST['logout'])){
	$_SESSION['id']="";
	$_SESSION['type']=""
}

function register(){
	$name=$_POST['name'];
	$pswrd=$_POST['pswrd'];
	$cnf_pswrd=$_POST['cnf_pswrd'];
	$unique_id=$_POST['unique_id'];
	$state=$_POST['state'];
	print_r($_POST);
	$con = mysqli_connect("localhost","root","tiger","vaccslove");
	// Check connection
	if (mysqli_connect_errno())
	{
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	else{
		$sql_query="INSERT INTO ngo (name,pswrd,unique_id,state) VALUES('$name','$pswrd','$unique_id','$state')";
		echo $sql_query;
		if(mysqli_query($con,$sql_query))
		{
			$_SESSION['id']=$unique_id;
			$_SESSION['type']="ngo";
			//set session and redirect to home page	
			echo "SUCCEESS";
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
		$sql_query="SELECT pswrd from ngo where unique_id='" . $id. "'";
		if($result= mysqli_query($con,$sql_query)){
			if(mysqli_num_rows($result)>0){
				$row=mysqli_fetch_assoc($result);
				//echo $row['pswrd'];
				if($row['pswrd']==$pswrd){
					echo "Welcome";
					$_SESSION['id']=$id;
					$_SESSION['type']="ngo";
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


<form method="post" action="ngo.php">
	<input type="text" name="name" placeholder="Name of the NGO" required />
	<input type="password" name="pswrd" placeholder="Password" required />
	<input type="password" name="cnf_pswrd" placeholder="Confirm Password" required />
	<input type="text" name="unique_id" placeholder="Unique Id of the NGO" required />
	<input type="text" name="state" placeholder="State" required />
	<button name="signup">Register</button>
</form>

<br/>

	
<form method="post" action="ngo.php">
	<input type="text" name="id" placeholder="unique id" required />
	<input type="password" name="pswrd" placeholder="password" required />
	<button name="login">Login</button>
</form>

<br/>



</body>
</html>