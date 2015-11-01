<?php require_once('includes/header.php'); ?>
<?php if ($_SESSION['type']=="hospital") { ?> 
<div class="dashboard-wrapper">
	<div class="row">
		<div class="col-md-6" style="border-right: 1px solid #bcbcbc">
			<h2>New Entry</h2>
			<div id="response"></div>
			<form method="post">
				<div class="form-group">
				<input type="text" class="form-control" name="father" placeholder="Father's Name" required id="father"/>
				</div><div class="form-group">
				<input type="text" class="form-control" name="mother" placeholder="Mother's Name" required id="mother"/>
				</div><div class="form-group">
				<input type="date" class="form-control" name="date" value=<?php echo date("Y-m-j")?> required id="date"/>
				</div><div class="form-group">
				<input type="text" class="form-control" name="contact" placeholder="Contact Number" required id="contact"/>
				</div><div class="form-group">
				<input type="text" class="form-control" name="address" placeholder="Street Address" required id="address"/>
				</div>
				<div class="form-group">
				<input type="text" class="form-control" name="birth_id" placeholder="Birth ID" required id="birth_id"/>
				</div>
				<div class="form-group">
				<input type="text" class="form-control" name="city" placeholder="City" required id="city"/>
				</div><div class="form-group"><select id="state" style="width:100%">
		<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option><option value="Andhra Pradesh">Andhra Pradesh</option><option value="Arunachal Pradesh">Arunachal Pradesh</option><option value="Assam">Assam</option><option value="Bihar">Bihar</option><option value="Chandigarh">Chandigarh</option><option value="Chhattisgarh">Chhattisgarh</option><option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option><option value="Daman and Diu">Daman and Diu</option><option value="Delhi">Delhi</option><option value="Goa">Goa</option><option value="Gujarat">Gujarat</option><option value="Haryana">Haryana</option><option value="Himachal Pradesh">Himachal Pradesh</option><option value="Jammu and Kashmir">Jammu and Kashmir</option><option value="Jharkhand">Jharkhand</option><option value="Karnataka">Karnataka</option><option value="Kerala">Kerala</option><option value="Lakshadweep">Lakshadweep</option><option value="Madhya Pradesh">Madhya Pradesh</option><option value="Maharashtra">Maharashtra</option><option value="Manipur">Manipur</option><option value="Meghalaya">Meghalaya</option><option value="Mizoram">Mizoram</option><option value="Nagaland">Nagaland</option><option value="Orissa">Orissa</option><option value="Pondicherry">Pondicherry</option><option value="Punjab">Punjab</option><option value="Rajasthan">Rajasthan</option><option value="Sikkim">Sikkim</option><option value="Tamil Nadu">Tamil Nadu</option><option value="Tripura">Tripura</option><option value="Uttaranchal">Uttaranchal</option><option value="Uttar Pradesh">Uttar Pradesh</option><option value="West Bengal">West Bengal</option>
				</select></div><div class="form-group">
				<input type="text" class="form-control" name="pin" placeholder="Pincode" required id="pin"/>
				</div>
				<button name="register" class="btn btn-default" id="register">Register</button>
			</form>
		</div>
		<script type="text/javascript" src="libs/js/maps.js"></script>
		<script type="text/javascript">
			$("#register").click(function(e){
					e.preventDefault();
					//var location = getLatLng(address+","+city);
				    var father = $("#father").val();
				    var mother = $("#mother").val();
				    var date = $("#date").val();
				    var contact = $("#contact").val(); 
				    var city = $("#city").val();
				    var address = $("#address").val();
				    var state = $("#state").val();
				    var pin = $("#pin").val();
				    var action = "new";
				    var birth_id = $("#birth_id").val();
				    //var lat = location.lat;
				   	//var lng = location.lng;
				   	console.log(location);
				   
				   		 $.ajax({
				      url: "http://localhost/vaccsolve/birth.php",
				      data:{action: action, father: father, mother: mother, date: new Date(date).getTime(), address:address, contact: contact, city: city, state: state, pin: pin, lat: 0, lng: 0, birth_id: birth_id},
				      method: "POST",
				      success: function(e){
				        response = JSON.parse(e);
				       if(response.code=="1"){
				         $("#response").text("Birth ID allocated : "+response.response_data);
				       }
				       else
				          $("#response").text(response.response);
				      },
				      error:function(e){
				        console.log(e);
				      }
				    });
				  
				   
			});
		</script>
		<div class="col-md-6">
			<h2>Search for previous entry</h2>
			<form>
				<div class="form-group">
					<input type="text" class="form-control" id="search_birth_id" placeholder="Unique Birth ID" required />
				</div>
				<button id="search" class="btn btn-default">Search By ID</button>
			</form>
			<hr>
			<h2>Add vaccination data</h2>
			<form>
				<div class="form-group">
					<input type="text" class="form-control" id="vacc-birth-id"placeholder="Unique Birth ID" required />
				</div>
				<select id="vaccine">
				<?php
				include 'db_connect.php';
				$query = "SELECT * from vaccine WHERE 1"; 
				$con = open_connection();
				$result = mysqli_query($con, $query);
				echo mysqli_num_rows($result);
				while($response = mysqli_fetch_assoc($result)){
					echo "<option value='".$response['id']."'>".$response['name']."</option>";
				}
				?>
				</select>
				<button name="long-search" class="btn btn-default" id="long-search">Submit</button>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">
	$("#search").click(function(e){
		e.preventDefault();
		var birth_id = $("#search_birth_id").val();
		$.ajax({
			url:"http://localhost/vaccsolve/birth.php",
			data:{birth_id: birth_id},
			method: "GET",
			success: function(e){

			}
		});
	});
	$("#long-search").click(function(e){
		e.preventDefault();
		var birth_id = $("#vacc-birth-id").val();
		var vaccine = $("#vaccine").val();
		$.ajax({
			url: "http://localhost/vaccsolve/birth.php",
			data:{action:"vaccinate",birth_id: birth_id, vaccine: vaccine},
			method:"POST",
			success:function(e){
				console.log(e);
			}
		});
	});
</script>
<?php } else { ?>
	<h2>At a glance</h2>
	<select id="state" style="width:100%">
		<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option><option value="Andhra Pradesh">Andhra Pradesh</option><option value="Arunachal Pradesh">Arunachal Pradesh</option><option value="Assam">Assam</option><option value="Bihar">Bihar</option><option value="Chandigarh">Chandigarh</option><option value="Chhattisgarh">Chhattisgarh</option><option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option><option value="Daman and Diu">Daman and Diu</option><option value="Delhi">Delhi</option><option value="Goa">Goa</option><option value="Gujarat">Gujarat</option><option value="Haryana">Haryana</option><option value="Himachal Pradesh">Himachal Pradesh</option><option value="Jammu and Kashmir">Jammu and Kashmir</option><option value="Jharkhand">Jharkhand</option><option value="Karnataka">Karnataka</option><option value="Kerala">Kerala</option><option value="Lakshadweep">Lakshadweep</option><option value="Madhya Pradesh">Madhya Pradesh</option><option value="Maharashtra">Maharashtra</option><option value="Manipur">Manipur</option><option value="Meghalaya">Meghalaya</option><option value="Mizoram">Mizoram</option><option value="Nagaland">Nagaland</option><option value="Orissa">Orissa</option><option value="Pondicherry">Pondicherry</option><option value="Punjab">Punjab</option><option value="Rajasthan">Rajasthan</option><option value="Sikkim">Sikkim</option><option value="Tamil Nadu">Tamil Nadu</option><option value="Tripura">Tripura</option><option value="Uttaranchal">Uttaranchal</option><option value="Uttar Pradesh">Uttar Pradesh</option><option value="West Bengal">West Bengal</option>
	</select>
	<div class="response">		
	</div>
	<script type="text/javascript">
		$("#state").click(function(){
			var state = $("#state").val();
			$.ajax({
			url: "http://localhost/vaccsolve/birth.php",
			data:{state:state},
			method:"GET",
			success:function(e){
				$(".response").text(e);
			}
		});
		});
	</script>
<?php } ?>
<?php require_once('includes/footer.php'); ?>