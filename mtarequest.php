<!DOCTYPE html>
<html lang="en">
  <head>
  <link href="mtaheader.css" rel="stylesheet" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Blood Donation</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	
	
		<script src="jquery.js"></script>
		<script>
			$(document).ready(function(){
				
				$("#patientname").focusout(function(){
					
					if($("#patientname").val()==""){
						$('#unaginame').text('Name is required');
						$('#unaginame').fadeIn();
					}
					
				});
				$("#BloodGroup").focusout(function(){
					
					if($("#BloodGroup").val()==""){
						$('#unagiblood').text('Select the blood group');
						$('#unagiblood').fadeIn();
					}
					
				});
				$("#patientage").focusout(function(){
					
					if($("#patientage").val()==""){
						$('#unagiage').text('Age is required');
						$('#unagiage').fadeIn();
					}
					
				});
				$("#patientneed").focusout(function(){
					
					if($("#patientneed").val()==""){
						$('#unagineed').text('Please fill this field');
						$('#unagineed').fadeIn();
					}
					
				});
				$("#patientunit").focusout(function(){
					
					if($("#patientunit").val()==""){
						$('#unagiunit').text('Please fill this field');
						$('#unagiunit').fadeIn();
					}
					
				});
				$("#patientnumber").focusout(function(){
					
					if($("#patientnumber").val()==""){
						$('#unaginumber').text('Number is required');
						$('#unaginumber').fadeIn();
					}
					
				});
				$("#patienthospital").focusout(function(){
					
					if($("#patienthospital").val()==""){
						$('#unagihospital').text('Please fill this field');
						$('#unagihospital').fadeIn();
					}
					
				});
				$("#patientlocation").focusout(function(){
					
					if($("#patientlocation").val()==""){
						$('#unagilocation').text('Location is required');
						$('#unagilocation').fadeIn();
					}
					
				});
				$("#patientaddress").focusout(function(){
					
					if($("#patientaddress").val()==""){
						$('#unagiaddress').text('Address is required');
						$('#unagiaddress').fadeIn();
					}
					
				});
				
				
			});
		</script>
	</head>
	<body id="bod">
	

  <div id="container">
  
	
	<nav class="navbar navbar-inverse navbar-fixed-top" id="na" data-spy="affix" data-offset-top="297">
  <ul class="nav navbar-nav">
    <li><a href="mtahome.php">Home</a></li>
    <li><a href="mtareg.php">Register</a></li>
    <li class="active"><a href="mtarequest.php">Post a request</a></li>
	<li><a href="mtagallery.html">Gallery</a></li>
	<li><a href="mtafindadonor.php">Find a donor</a></li>
	<li><a href="mtalog.php">Login</a></li>
	<li><a href="mtacontact.php">Contact us</a></li>
    <li><a href="mtafaqs.php">FAQs</a></li>
  </ul>
</nav>

<form method="post" action="requestdatabase.php">
		
			<div class="header" style="margin-top:80px;">
			<h1>Post Your Request</h1>
			</div>
			 
			 
				 
					<div id="box">
					<table class="table table-hover">
						<tr>
							<td id="td1">Patient Full Name</td>
							<td>:</td>
							<td><div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
									<input type="text" class="form-control" id="patientname" name="patientname"  required/>
									</div>
								<div class="alert alert-danger fade in" id="unaginame" style="display:none;">
							
							
								</div>
								</td>
							</tr>
							<tr>
							<td>Patient Blood Group</td>
							<td>:</td>
								<td><select name="BloodGroup"  class="form-control" id="BloodGroup" required>
										<option value="">-----Select-----</option>
										<option value="A+">A+</option>
										<option value="A-">A-</option>
										<option value="A1+">A1+</option>
										<option value="A1-">A1-</option>
										<option value="A1B+">A1B+</option>
										<option value="A1B-">A1B-</option>
										<option value="A2+">A2+</option>
										<option value="A2-">A2-</option>
										<option value="A2B+">A2B+</option>
										<option value="A2B-">A2B-</option>
										<option value="AB+">AB+</option>
										<option value="AB-">AB-</option>
										<option value="B+">B+</option>
										<option value="B-">B-</option>
										<option value="Bombay Blood Group">Bombay Blood Group</option>
										<option value="O+">O+</option>
										<option value="O-">O-</option>
										</select>
								<div class="alert alert-danger fade in" id="unagiblood" style="display:none;">
							
							
								</div>
								</td>
								
								
							</tr> 
							<tr>
							<td>Patient Age</td>
							<td>:</td>
							<td><div class="input-group">
							<input type="text" class="form-control" id="patientage" name="patientage"  required/>
									</div>
								<div class="alert alert-danger fade in" id="unagiage" style="display:none;">
							
							
								</div>
								</td>
							</tr>
							<tr>
							<td>When you need blood?<br/>(MM/DD/YYYY)</td>
							<td>:</td>
							<td><div class="input-group">
							<input type="text" class="form-control" id="patientneed" name="patientneed"  required/>
									</div>
								<div class="alert alert-danger fade in" id="unagineed" style="display:none;">
							
							
								</div>
								</td>
							</tr>
							<tr>
							<td>How many units you need?</td>
							<td>:</td>
							<td><div class="input-group">
							<input type="text" class="form-control" id="patientunit" name="patientunit"  required/>
									</div>
								<div class="alert alert-danger fade in" id="unagiunit" style="display:none;">
							
							
								</div>
								</td>
							</tr>
							<tr>
							<td>Mobile Number</td>
							<td>:</td>
							<td><div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-phone" aria-hidden="true"></i></span>
							<input type="text" class="form-control" id="patientnumber" name="patientnumber"  required/>
									</div>
								<div class="alert alert-danger fade in" id="unaginumber" style="display:none;">
							
							
								</div>
								</td>
							</tr>
							<tr>
							<td>Hospital Name</td>
							<td>:</td>
							<td><div class="input-group">
							<input type="text" class="form-control" id="patienthospital" name="patienthospital"  required/>
									</div>
								<div class="alert alert-danger fade in" id="unagihospital" style="display:none;">
							
							
								</div>
								</td>
							</tr>
							<tr>
							<td>Location</td>
							<td>:</td>
							<td><div class="input-group">
							<input type="text" class="form-control" id="patientlocation" name="patientlocation"  required/>
									</div>
								<div class="alert alert-danger fade in" id="unagilocation" style="display:none;">
							
							
								</div>
								</td>
							</tr>
							<tr>
							<td>Patient Address</td>
							<td>:</td>
							<td><div class="input-group">
							<input type="text" class="form-control" id="patientaddress" name="patientaddress"  required/>
									</div>
								<div class="alert alert-danger fade in" id="unagiaddress" style="display:none;">
							
							
								</div>
								</td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" id="btn1" class="btn btn-primary" value="Post"/></td>
								
							</tr>
						</table>
					</div>
		</form>
		</div><!--container-->
	
  </body>	
</html>	