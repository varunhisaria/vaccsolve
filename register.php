<?php require_once('includes/header.php'); ?>
	<div class="col-md-6 col-xs-6 org-chooser" style="font-size: 24px"> 
		<h2 style="display:inline-block">Are you a</h2>
    	<input type="radio" name="org" value="NGO" style="font-size: 24px">&nbsp;NGO
 	</div>
  	<div class="col-md-6 col-xs-6 org-chooser" style="font-size: 24px">
  		<h2 style="display:inline-block">or a</h2>
    	<input type="radio" name="org" value="HOSPITAL">&nbsp;Hospital
    	<h2 style="display:inline-block">?</h2>
  	</div>
  <script type="text/javascript">
  	$("input[name=org]:radio").change(function(){
  		var val =  $('input[name=org]:checked').val();
  		if(val=="NGO"){
  			$("#hospital-form").hide();
  			$("#ngo-form").show();
  		}
  		else{
  			$("#ngo-form").hide();
  			$("#hospital-form").show();
  		}
  	})
  </script>
  <form id="ngo-form">
  	<div class="form-group">
	<input class="form-control" type="text" id="ngo-name" placeholder="NGO Name" required />
	</div>
	<div class="form-group">
	<input class="form-control" type="text" id="uid" placeholder="Unique ID" required />
	</div>
	<div class="form-group">
	<input class="form-control" type="password" id="ngo-password" placeholder="Password" required />
	</div>
	<select id="ngo-state">
		<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option><option value="Andhra Pradesh">Andhra Pradesh</option><option value="Arunachal Pradesh">Arunachal Pradesh</option><option value="Assam">Assam</option><option value="Bihar">Bihar</option><option value="Chandigarh">Chandigarh</option><option value="Chhattisgarh">Chhattisgarh</option><option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option><option value="Daman and Diu">Daman and Diu</option><option value="Delhi">Delhi</option><option value="Goa">Goa</option><option value="Gujarat">Gujarat</option><option value="Haryana">Haryana</option><option value="Himachal Pradesh">Himachal Pradesh</option><option value="Jammu and Kashmir">Jammu and Kashmir</option><option value="Jharkhand">Jharkhand</option><option value="Karnataka">Karnataka</option><option value="Kerala">Kerala</option><option value="Lakshadweep">Lakshadweep</option><option value="Madhya Pradesh">Madhya Pradesh</option><option value="Maharashtra">Maharashtra</option><option value="Manipur">Manipur</option><option value="Meghalaya">Meghalaya</option><option value="Mizoram">Mizoram</option><option value="Nagaland">Nagaland</option><option value="Orissa">Orissa</option><option value="Pondicherry">Pondicherry</option><option value="Punjab">Punjab</option><option value="Rajasthan">Rajasthan</option><option value="Sikkim">Sikkim</option><option value="Tamil Nadu">Tamil Nadu</option><option value="Tripura">Tripura</option><option value="Uttaranchal">Uttaranchal</option><option value="Uttar Pradesh">Uttar Pradesh</option><option value="West Bengal">West Bengal</option>
				</select>
		<button name="signup" id="signup-ngo">Register</button>
  </form>
  <form id="hospital-form">
  	<div class="form-group">
	<input class="form-control" type="text" id="name" placeholder="Hospital Name" required />
	</div>
	<div class="form-group">
	<input class="form-control" type="password" id="pswrd" placeholder="Password" required />
	</div><div class="form-group">
	<input class="form-control" type="password" id="cnf_pswrd" placeholder="Confirm Password" required />
	</div><div class="form-group">
	<input class="form-control" type="text" id="address" placeholder="Street Address" required />
	</div><div class="form-group">
	<input class="form-control" type="text" id="city" placeholder="City" required />
	</div><select id="state">
		<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option><option value="Andhra Pradesh">Andhra Pradesh</option><option value="Arunachal Pradesh">Arunachal Pradesh</option><option value="Assam">Assam</option><option value="Bihar">Bihar</option><option value="Chandigarh">Chandigarh</option><option value="Chhattisgarh">Chhattisgarh</option><option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option><option value="Daman and Diu">Daman and Diu</option><option value="Delhi">Delhi</option><option value="Goa">Goa</option><option value="Gujarat">Gujarat</option><option value="Haryana">Haryana</option><option value="Himachal Pradesh">Himachal Pradesh</option><option value="Jammu and Kashmir">Jammu and Kashmir</option><option value="Jharkhand">Jharkhand</option><option value="Karnataka">Karnataka</option><option value="Kerala">Kerala</option><option value="Lakshadweep">Lakshadweep</option><option value="Madhya Pradesh">Madhya Pradesh</option><option value="Maharashtra">Maharashtra</option><option value="Manipur">Manipur</option><option value="Meghalaya">Meghalaya</option><option value="Mizoram">Mizoram</option><option value="Nagaland">Nagaland</option><option value="Orissa">Orissa</option><option value="Pondicherry">Pondicherry</option><option value="Punjab">Punjab</option><option value="Rajasthan">Rajasthan</option><option value="Sikkim">Sikkim</option><option value="Tamil Nadu">Tamil Nadu</option><option value="Tripura">Tripura</option><option value="Uttaranchal">Uttaranchal</option><option value="Uttar Pradesh">Uttar Pradesh</option><option value="West Bengal">West Bengal</option>
				</select><div class="form-group">
	<input class="form-control" type="text" id="pin" placeholder="Pincode" required />
	</div><div class="form-group">
	<input class="form-control" type="text" id="contact" placeholder="Contact Number" required />
	</div>
	<button name="signup" id="signup-hospital">Register</button>
</form>
<script type="text/javascript">
	$("#hospital-form").hide();
	$("input[name=org][value='NGO'").prop("checked", true);
	$("#signup-hospital").click(function(e){
		e.preventDefault();
		var name = $("#name").val();
		var password = $("#pswrd").val();
		var address = $("#address").val();
		var city = $("#city").val();
		var state = $("#state").val();
		var pincode = $("#pin").val();
		var contact = $("#contact").val();
		console.log(name, password, address, city, state, pincode, contact);
		if(name && password && address && city && state && pincode && contact){
			$.ajax({
				url: "http://localhost/vaccsolve/signup.php",
				data:{name: name, password: password, address: address, city: city, state: state, pin: pincode, contact: contact, org:"hospital"},
				method: "POST",
				success:function(e){
					console.log(e);
				}
			});
		}
	});

	$("#signup-ngo").click(function(e){
		e.preventDefault();
		var name = $("#ngo-name").val();
		var uid = $("#uid").val();
		var password = $("#ngo-password").val();
		var state = $("#ngo-state").val();
		if(name && password && uid && state){
			console.log(name, password, uid, state);
			$.ajax({
				url: "http://localhost/vaccsolve/signup.php",
				data:{name: name, password: password, uid:uid, state: state, org:"ngo"},
				method:"POST",
				success:function(e){
					console.log(e);
				}
			});
		}
	});
</script>
<?php require_once('includes/footer.php'); ?>