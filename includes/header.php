<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>VaccSolve</title>
  <link rel="stylesheet" type="text/css" href="../libs/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../libs/css/custom.css">
  <script type="text/javascript" src="../libs/js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="../libs/js/bootstrap.min.js"></script>
</head>
<body>
	 <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">VaccSolve</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <?php if(isset($_SESSION['loggedin'])) { ?>
            <li><a href="#logout">Logout</a></li>
            <?php } else { ?>
            <li><button type="button" class="btn btn-as-link" data-toggle="modal" data-target="#loginModal">Login</button></li>
            <?php } ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!-- Login Modal -->
   <!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="loginModalLabel">Login</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-6 org-chooser"> 
            <input type="radio" name="org" value="NGO">NGO
          </div>
          <div class="col-md-6 org-chooser">
            <input type="radio" name="org" value="HOSPITAL">Hospital
          </div>
        </div>
        <hr>
        <div class="form-group">
          <input type="text" placeholder="User Id" class="form-control" id="id">
        </div>
        <div class="form-group">
          <input type="text" placeholder="Password" class="form-control" id="password">
        </div>
        <button class="btn btn-default" id="login">Log In</button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $("#login").click(function(){
    var id = $("#id").val();
    var passwd = $("#password").val();
    var org = $('input[name=org]:checked').val();
    $.ajax({
      url: "http://localhost/vaccsolve/authenticate.php",
      data:{org: org, pswd: passwd, id: id},
      method: "POST",
      success: function(e){
        console.log(e);
      },
      error:function(e){
        console.log(e);
      }
    });
  });
</script>
<div class="main-container">
