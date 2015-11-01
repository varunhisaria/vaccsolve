<?php
	include 'db_connect.php';

	if(isset($_POST['org'])){
		if($_POST['org']=="hospital"){
			register_hospital();
		}
		elseif($_POST['org']=="ngo"){
			register_ngo();
		}
		else
			echo "Invalid Operation";
	}
	function register_ngo(){
		$name = $_POST['name'];
		$uid = $_POST['uid'];
		$password =$_POST['password'];
		$state = $_POST['state'];
		$con = open_connection();
		$query = "SELECT * FROM ngo WHERE unique_id = '".$uid."'";
		if($result = mysqli_query($con, $query)){
			if(mysqli_num_rows($result)>0){
				$response['code']=0;
				$response['response']="NGO with that UID exists.";
			}
			else{
				$query = "INSERT INTO ngo (name, pswrd, state, unique_id) VALUES ('$name', '$password','$state','$uid')";
				if(mysqli_query($con, $query)){
					$response['code']=1;
					$response['response']="Data inserted.";
					$_SESSION["id"]=$uid;
					$_SESSION['type']="ngo";
					$_SESSION['logged_in']=true;
				}
				else{
					$response['code']=0;
					$response['response']="There was some error. Please try again later";
				}
			}
		}
		echo json_encode($response);
	}

	function register_hospital(){
		$name=$_POST['name'];
		$pswrd=$_POST['password'];
		$address=$_POST['address'];
		$city=$_POST['city'];
		$state=$_POST['state'];
		$pin=$_POST['pin'];
		$contact=$_POST['contact'];
		$con = open_connection();
		$query="INSERT INTO hospital (name,pswrd,address,city,state,pin,lat,lng,contact) VALUES('$name','$pswrd','$address','$city','$state',$pin,0,0,$contact)";
		if(mysqli_query($con, $query)){
			$response['code']=1;
			$response['response']="Data inserted.";
		}
		else{
			$response['code']=0;
			$response['response']="There was some error. Please try again later";
		}
		echo json_encode($response);
	}	

?>
