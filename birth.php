<?php
	include 'db_connect.php';
	if(isset($_GET['state'])){
		getDatabyState();
	}
	elseif (isset($_GET['birth_id'])) {
		searchById();
	}
	elseif($_POST['action'] == "new"){
		insert_child();
	}
	elseif ($_POST['action']=="vaccinate") {
		vaccinate();
	}
	elseif($_POST['action']=="edit"){
		edit_child();
	}
	else
		insert_child();

	function getDataByState(){
		$state = $_GET['state'];
		$sql_query="SELECT COUNT(*) AS count FROM child where state = '".$state."'";
		$con = open_connection();
		if($result=mysqli_query($con, $sql_query)){
			if(mysqli_num_rows($result)>0){
				$row=mysqli_fetch_assoc($result);
				$response['count']=$row['count'];
		}
		
	}
}

	function searchById(){
		$uniqueId = $_GET['birth_id'];
		$sql_query="SELECT * FROM child where hid = '".$uniqueId."'";
		$con = open_connection();
		if($result=mysqli_query($con, $sql_query)){
			if(mysqli_num_rows($result)>0){
				$row=mysqli_fetch_assoc($result);
		}
		echo json_encode($row);
	}
}
	function vaccinate(){
		$con = open_connection();
		$uniqueId = $_POST['birth_id'];
		$vaccinate = $_POST['vaccine'];
		$date = $_POST['date'];

		$sql_query = "SELECT id FROM child WHERE hid='".$uniqueId."'";
		$con = open_connection();
		if($result=mysqli_query($con, $sql_query)){
			if(mysqli_num_rows($result)>0){
				$row=mysqli_fetch_assoc($result);
				$id = $row['id'];
			}
			$sql_query = "INSERT INTO cv_mapping (child_id, vaccine_id) VALUES ('$id', '$vaccinate')";
			if(mysqli_query($con,$sql_query))
			{
				$response['code']=1;
				$response['response']="Data inaserted";
			}
			else{
				$response['code']=0;
				$response['response']="Please try again later";
			}
		}
		else{
			$response['code']=0;
			$response['response']="Invalid Birth ID";
		}	
		echo json_encode($response);
	}
	
	function insert_child(){
	$father=$_POST['father'];
	$mother=$_POST['mother'];
	//$pswrd=$_POST['pswrd'];
	//$cnf_pswrd=$_POST['cnf_pswrd'];
	//$pswrd = "ABCD";
	$date = $_POST['date'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$pin=$_POST['pin'];
	$contact=$_POST['contact'];
	$lat = $_POST['lat'];
	$lng = $_POST['lng'];
	$birth_id = $_POST['birth_id'];
	$hid = $_SESSION['id']."/".date("Y")."/".$birth_id;
	$con = open_connection();

	$sql_query="INSERT INTO child (dob,hid,mother,father,address,city,state,pin,lat,lng,contact) VALUES('$date','$hid', '$mother','$father','$address','$city','$state',$pin,0,0,$contact)"; 
	if(mysqli_query($con,$sql_query))
	{
		$response['code']=1;
		$response['response']="Data inaserted";
		$response['response_data']=$hid;
	}
	else{
		$response['code']=0;
		$response['response']="Please try again later";
	}
	echo json_encode($response);

}

?>