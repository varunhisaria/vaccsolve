<?php 
session_start();
include 'db_connect.php';


	if(isset($_POST['org'])){
		$response;
		if($_POST['org'] == "NGO"){
			//echo "NGO";
			login($_POST['id'], $_POST['pswd'], "ngo");
			/*if($_POST['id']=="admin" && $_POST['pswd']=="admin")
				echo json_encode("NGO Login");*/
		}
		else if($_POST['org']=="HOSPITAL" && isset($_POST['id']) && isset($_POST['pswd'])){
			//echo "Hospital";
			login($_POST['id'], $_POST['pswd'], "hospital");
			/*if($_POST['id']=="admin" && $_POST['pswd']=="admin")
				echo json_encode("HOSPITAL login");*/
		}
		else
			$response['error']="Invalid login type detected";
	}

	if($_GET['q']=="logout")
		logout();


function logout(){
	session_destroy();
	header("Location: http://localhost/vaccsolve");
}

function login($id, $pswrd, $table){
	$con = open_connection();
		$sql_query="SELECT pswrd from $table where id='" . $id. "'";

	// Check connection
	if (mysqli_connect_errno())
	{
	  //echo "Failed to connect to MySQL: " . mysqli_connect_error();
		$response['response'] = "Failed to connect to DB";
		$response['error_code']=0;
	}
	else{
		$sql_query="SELECT pswrd from $table where name='" . $id. "'";
		//echo $sql_query;

		if($result= mysqli_query($con,$sql_query)){
			if(mysqli_num_rows($result)>0){
				$row=mysqli_fetch_assoc($result);
				//echo $row['pswrd'];
				if($row['pswrd']==$pswrd){
					$response['response']="Login Successful";
					$response['error_code']=1;
					$_SESSION['id']=$id;
					$_SESSION['type']=$table;
					$_SESSION['loggedin']=true;

					//redirect to home
				}
				else{
					$response['response']=  "Invalid password";
					$response['error_code']=0;
				}
			}
			else{
				$response['response']= "User does not exist";
				$response['error_code']=0;
			}
		}
		else{
			$response['response']= "There was some technical difficulty. Please try again later";
			$response['error_code']=0;
		//	echo mysql_error($con);
		}

	return $reponse;

	}
	echo json_encode($response);

}

?>
