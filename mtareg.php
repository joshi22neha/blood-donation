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
				
				
				$("#textbox1").focusout(function(){
					
					if($("#textbox1").val()=="")
					{
						$('#unaginame').text('Name is required');
						$('#unaginame').fadeIn();
						
					}
				});
				$("#dpBloodGroup1").focusout(function(){
					if($("#dpBloodGroup1").val()=="")
					{
						$('#unagiblood').text('Select a blood group');
						$('#unagiblood').fadeIn();
						
					}
				});
				$("#dpBloodGroup2").focusout(function(){
					if($("#dpBloodGroup2").val()=="")
					{
						$('#unagigender').text('Select your gender');
						$('#unagigender').fadeIn();
						
					}
				});
				$("#textbox2").focusout(function(){
					if($("#textbox2").val()=="")
					{
						$('#unagidate').text('Enter your date of birth');
						$('#unagidate').fadeIn();
						
					}
				});
				$("#textbox3").focusout(function(){
					if($("#textbox3").val()=="")
					{
						$('#unagimobile').text('Mobile no. is requiured');
						$('#unagimobile').fadeIn();
						
					}
				});
				$("#dpBloodGroup3").focusout(function(){
					if($("#dpBloodGroup3").val()=="")
					{
						$('#unagicountry').text('Select your Country');
						$('#unagicountry').fadeIn();
						
					}
				});
				$("#dpBloodGroup4").focusout(function(){
					if($("#dpBloodGroup4").val()=="")
					{
						$('#unagistate').text('Select your State');
						$('#unagistate').fadeIn();
						
					}
				});
				$("#dpBloodGroup5").focusout(function(){
					if($("#dpBloodGroup5").val()=="")
					{
						$('#unagicity').text('Select your City');
						$('#unagicity').fadeIn();
						
					}
				});
				$("#textbox5").focusout(function(){
					if($("#textbox5").val()=="")
					{
						$('#unagiaddress').text('Address is required');
						$('#unagiaddress').fadeIn();
						
					}
				});
				$("#textbox7").focusout(function(){
					if($("#textbox7").val()=="")
					{
						$('#unagipass').text('Password is required');
						$('#unagipass').fadeIn();
						
					}
				});
				$("#dpBloodGroup6").focusout(function(){
					if($("#dpBloodGroup6").val()=="")
					{
						$('#unagiavail').text('Select your availability');
						$('#unagiavail').fadeIn();
						
					}
				});
					
				$("#textbox8").focusout(function(){
					if($("#textbox7").val()!=$("#textbox8").val())
					{
						$('#unagipassword').text('Password mismatch');
						$('#unagipassword').fadeIn();
						
					}
					else {$('#unagipassword').hide();}
				});
				
				$("#textbox4").focusout(function(){
					if($("#textbox4").val()=="")
					{
						$('#unagiemail').text('Email is required');
						$('#unagiemail').fadeIn();
						
					}
					else{$.post("validation.php",
					{
						email1:$("#textbox4").val()
					},
					function(data)
						{
							if(data!="")
							{
								$('#unagiemail').text(data);
								$('#unagiemail').fadeIn();
								
							}
							else {$('#unagiemail').hide();}
						});
					}
					});
						
					$("#textbox6").focusout(function(){
						if($("#textbox6").val()=="")
					{
						$('#unagiuserid').text('User id is required');
						$('#unagiuserid').fadeIn();
						
					}
					else{$.post("validation.php",
					{
						userid1:$("#textbox6").val()
					},
					function(data)
						{
							if(data!="")
							{
								$('#unagiuserid').text(data);
								$('#unagiuserid').fadeIn();
								
							}
							else {$('#unagiuserid').hide();}
						});
					}
				});
				
				
				$.get("regsql.php",function(data){
					
					$(".country").html(data);
					
					});
					
					$(".country").change(function(){
						
					$.post("regsql.php",
					{
						country:$(".country").val()
					},
					function(data)
						{
							$(".state").html(data);
						});
					});
				
				$(".state").change(function(){
						
					$.post("regsql.php",
					{
						state:$(".state").val()
					},
					function(data)
						{
							$(".city").html(data);
						});
					});
			});
			
		</script>
	</head>
  <body id="bod">
	

  <div id="container">
  
	
	<nav class="navbar navbar-inverse navbar-fixed-top" id="na" data-spy="affix" data-offset-top="297">
  <ul class="nav navbar-nav">
    <li><a href="mtahome.php">Home</a></li>
    <li  class="active"><a href="mtareg.php">Register</a></li>
    <li><a href="mtarequest.php">Post a request</a></li>
	<li><a href="mtagallery.html">Gallery</a></li>
	<li><a href="mtafindadonor.php">Find a donor</a></li>
	<li><a href="mtalog.php">Login</a></li>
	<li><a href="mtacontact.php">Contact us</a></li>
    <li><a href="mtafaqs.php">FAQs</a></li>
  </ul>
</nav>

<form method="post" action="regdatabase.php">
		
			<div class="header" style="margin-top:80px;">
			<h1>Register Here</h1>
			</div>
			 
			 
				 
					<div id="box">
						<table class="table table-hover">
							<tr>
								<td id="td1">Your name</td>
								<td>:</td>
								<td><div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
									<input type="text" class="form-control" id="textbox1" name="name"  placeholder="Enter your Name" required/>
									</div>
								<div class="alert alert-danger fade in" id="unaginame" style="display:none;">
							
							
								</div>
								</td>
							</tr>
							<tr>
							<td>Blood Group</td>
							<td>:</td>
								<td><select name="dpBloodGroup"  class="form-control" id="dpBloodGroup1" required>
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
								<td>Gender</td>
								<td>:</td>
								<td><select name="dpGender" id="dpBloodGroup2" class="form-control" required>
								<option value="">-----Select-----</option>
								<option value="M">Male</option>
								<option value="F">Female</option>
								</select>
								<div class="alert alert-danger fade in" id="unagigender" style="display:none;">
							
							
								</div>
								</td>
									
							</tr>
							<tr>
								<td>Date Of Birth<br/>(DD/MM/YYYY)</td>
								<td>:</td>
								<td><div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-th" aria-hidden="true"></i></span>
									<input type="text" class="form-control" id="textbox2" name="name1"   placeholder="             /                 /            " required/>
								</div>
								<div class="alert alert-danger fade in" id="unagidate" style="display:none;">
							
							
							
								</div>
								</td>
							</tr>
							<!--<div class="mid">
								<p>CONTACT INFORMATION</p>
							</div>-->
							<tr>
								<td>Mobile No.</td>
								<td>:</td>
								<td><div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-phone" aria-hidden="true"></i></span>
									<input type="text" class="form-control" id="textbox3" name="name2"   placeholder="Mobile No." required/></div>
								<div class="alert alert-danger fade in" id="unagimobile" style="display:none;">
							
							
								</div>
								</td>
							</tr>
							<tr>
								<td>Select Country</td>
								<td>:</td>
								<td><select name="dpCountry" id="dpBloodGroup3" class="form-control country" required>
									
									</select>	
									<div class="alert alert-danger fade in" id="unagicountry" style="display:none;">
							
							
								</div>
								</td>
							</tr>
							<tr>
								<td>Select State</td>
								<td>:</td>
								<td><select name="dpCountry1" id="dpBloodGroup4" class="form-control state" required>
									
									</select>
									<div class="alert alert-danger fade in" id="unagistate" style="display:none;">
							
							
								</div>
								</td>
							</tr>
							
							<tr>
								<td>Select City</td>
								<td>:</td>
								<td><select name="dpCountry2" id="dpBloodGroup5" class="form-control city" required>
									
									</select>
									<div class="alert alert-danger fade in" id="unagicity" style="display:none;">
							
							
								</div>
								</td>	
							</tr>
							<tr>
								<td>Email</td>
								<td>:</td>
								<td><div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i></span>
									<input type="email" class="form-control" id="textbox4" name="name3"   placeholder="Email" required/></div>
									<div class="alert alert-danger fade in" id="unagiemail" style="display:none;">
							
							
							</div>
								</td>
							</tr>
							<tr>
								<td>Permanent Address</td>
								<td>:</td>
								<td><div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-home" aria-hidden="true"></i></span>
									<input type="text" class="form-control" id="textbox5" name="name4"   placeholder="Permanent Address" required/></div>
								<div class="alert alert-danger fade in" id="unagiaddress" style="display:none;">
							
							
								</div>
								</td>
							</tr>
							<tr>
								<td>UserId</td>
								<td>:</td>
								<td><div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user " aria-hidden="true"></i></span>
									<input type="text" class="form-control" id="textbox6" name="name5"   placeholder="UserId" required/></div>
								<div class="alert alert-danger fade in" id="unagiuserid" style="display:none;">
									
								</div>
								</td>
							</tr>
							<tr>
								<td>Password</td>
								<td>:</td>
								<td><div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
									<input type="password" class="form-control" id="textbox7" name="name6"   placeholder="Password" required/></div>
								<div class="alert alert-danger fade in" id="unagipass" style="display:none;">
							
							
								</div>
								</td>
							</tr>
							<tr>
								<td>Re-type Password</td>
								<td>:</td>
								<td><div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
									<input type="password" class="form-control" id="textbox8" name="name7"   placeholder="Re-type Password" required/></div>
								<div class="alert alert-danger fade in" id="unagipassword" style="display:none;">
							
							
								</div>
								</td>
							</tr>
							
							<tr>
								<td>Please confirm your availability to donate blood</td>
								<td>:</td>
								<td><select name="availability" class="form-control" id="dpBloodGroup6" required>
								<option value="">-----Select-----</option>
								<option value="A">Available</option>
								<option value="N-A">Not Available</option>
								</select>
								<div class="alert alert-danger fade in" id="unagiavail" style="display:none;">
							
							
								</div>
								</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td><input type="checkbox" required/><p> I authorise the website to display my name and telephone number,so that the needy could contact me, as and when there is an emergency.</p></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" id="btn1" class="btn btn-primary" value="Register"/></td>
								
							</tr>
						</table>
					</div>
		</form>
		</div><!--container-->
	
  </body>
</html>		