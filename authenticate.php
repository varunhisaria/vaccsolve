<?php 
	if(isset($_POST['org'])){
		$response;
		if($_POST['org'] == "NGO"){
			login($_POST['id'], $_POST['pswd'], "ngo");
			/*if($_POST['id']=="admin" && $_POST['pswd']=="admin")
				echo json_encode("NGO Login");*/
		}
		else if($_POST['org']=="HOSPITAL" && isset($_POST['id']) && isset($_POST['pswd'])){
			login($_POST['id'], $_POST['pswd'], "hospital");
			/*if($_POST['id']=="admin" && $_POST['pswd']=="admin")
				echo json_encode("HOSPITAL login");*/
		}
		else
			$response['error']="Invalid login type detected";
	}

function login($id, $pswrd, $table){
	$con = mysqli_connect("localhost","root","tiger","vaccslove");
	// Check connection
	if (mysqli_connect_errno())
	{
	  //echo "Failed to connect to MySQL: " . mysqli_connect_error();
		$reponse = "Failed to connect to DB";
	}
	else{
		$sql_query="SELECT pswrd from $table where id='" . $id. "'";
		if($result= mysqli_query($con,$sql_query)){
			if(mysqli_num_rows($result)>0){
				$row=mysqli_fetch_assoc($result);
				//echo $row['pswrd'];
				if($row['pswrd']==$pswrd){
					echo "Welcome";
					$_SESSION['id']=$id;
					$_SESSION['type']="hospital";
					$_SESSION['loggedin']=true;
					//redirect to home
				}
				else{
					$response =  "Invalid password";
				}
			}
			else{
				$response = "User does not exist";
			}
		}
		else{
			$reponse = "There was some technical difficulty. Please try again later";
		//	echo mysql_error($con);
		}
	}
	return $reponse;
}

?>
