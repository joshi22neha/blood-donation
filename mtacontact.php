<!doctype html>
<html lang="en">
<head>
<link href="mtaheader.css" rel="stylesheet" />
<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="jquery.js"></script>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Blood Donation</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
   <style>
	.card-map .map {
		height: 500px;
		padding-top: 20px; }
	.card-map .map > div {
		height: 100%; }
	</style>
<?php
		if($_SERVER["REQUEST_METHOD"]=="POST")
	{
	$name=$_POST["name"];
	$email=$_POST["email"];
	$comments=$_POST["comments"];
	mysql_connect("localhost","root");
	mysql_select_db("country");
	$query="insert into contact values('$name','$email','$comments')";
	mysql_query($query);

	}
		?>
</head>

<body id="bod">
		

<div class="container">

<nav class="navbar navbar-inverse navbar-fixed-top" id="na" data-spy="affix" data-offset-top="297">
  <ul class="nav navbar-nav">
    <li><a href="mtahome.php">Home</a></li>
    <li><a href="mtareg.php">Register</a></li>
    <li><a href="mtarequest.php">Post a request</a></li>
	<li><a href="mtagallery.html">Gallery</a></li>
	<li><a href="mtafindadonor.php">Find a donor</a></li>
	<li><a href="mtalog.php">Login</a></li>
	<li class="active"><a href="mtacontact.php">Contact us</a></li>
    <li><a href="mtafaqs.php">FAQs</a></li>
  </ul>
</nav>
<form method="post">
<div class="header" style="margin-top:80px;">
			<h1>Contact</h1>
			</div>
			<div id="box">
  
  
  <div class="row test">
    <div class="col-md-4">
     <p> <em>Are you in trouble?</br>Contact here.</em></p>
      <p><span class="glyphicon glyphicon-map-marker"></span>Kolkata, India</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +91 987654321</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@gmail.com</p> 
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text"required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div> 
    </div>
  </div>
 
<div class="wrapper">
	<div class="content">
		<div class="container-fluid">
			<div class="card card-map">
				<div class="header">
					<h4 class="title">Google Maps</h4>
				</div>
				<div class="map">
					<div id="map"></div>
				</div>
			</div>
		</div>
	</div>
</div>			
</form>
	</div>
	</div>	
</body>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBf-lSdwUQSIqreCE8lcvcdEbWfsBpXpSA&libraries=places&callback=demo.initGoogleMaps" async defer"></script>
  
	<!--Maps API-->
	<script src="js/map.js"></script>

    <script>
        $().ready(function(){
            demo.initGoogleMaps();
        });
    </script>

</html>
