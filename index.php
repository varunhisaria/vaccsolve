<?php require_once('includes/header.php'); ?>
<div class="landing-wrapper">
	<div class="row" id="landing">
		<div class="col-md-2 col-xs-2 center">
			<i class="fa fa-sign-in"></i>
			<p>Register</p>
		</div>
		<div class="col-md-2 col-xs-2 center">
			<i class="fa fa-arrow-right" style="background-color: white; "></i>
		</div>
		<div class="col-md-2 col-xs-2 center">
			<i class="fa fa-file-text-o"></i>
			<p>Fill</p>
		</div>
		<div class="col-md-2 col-xs-2 center">
			<i class="fa fa-arrow-right" style="background-color: white; "></i>
		</div>
		<div class="col-md-2 col-xs-2 center">
			<i class="fa fa-search"></i>
			<p>Track</p>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		var height = parseInt($(window).height())-100;
		$(".landing-wrapper").css({"height":height, "display":"table", "width":"100%"});
		$(".landing-wrapper .row").css({"display": "table-cell", "height": "100%", "vertical-align": "middle"});
	});
</script>
<!--
<input type="text" id="address">
<button id="signup">Fetch</button>
<script type="text/javascript" src="libs/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="libs/js/bootstrap.min.js"></script>
<script type="text/javascript" src="libs/js/maps.js"></script>
<script type="text/javascript">
	$("#signup").click(function(e){
		e.preventDefault();
		var address = $("#address").val();
		getLatLng(address);
	});
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1U1TptAe0PE4GPfrwXKrG-Dg0nm02OQQ&signed_in=true&callback=initMap"
        async defer></script>-->
<?php require_once('includes/footer.php'); ?>