<!DOCTYPE html>
<html lang="en">
  <head>
  <link href="mtaheader.css" rel="stylesheet" />
  <?php	
	session_start();
	$a="";
	if(!isset($_SESSION['islogged']) || ($_SESSION['islogged']!=true))
	{
		header('location:mtalog.php');
	}
	if(isset($_SESSION['fav']))
	{
	$a=$_SESSION['fav'];
	//echo "abc";
//echo $a;
	
mysql_connect("localhost","root");
	mysql_select_db("country");
	$query="select * from reg where userid='".$a."'";
	$all_rows=mysql_query($query);
	while($rows=mysql_fetch_array($all_rows))
	{
		$name=$rows[0];
		$blood=$rows[1];
		$gender=$rows[2];
		$dob=$rows[3];
		$mobile=$rows[4];
		$country=$rows[5];
		$state=$rows[6];
		$city=$rows[7];
		$email=$rows[8];
		$address=$rows[9];
		$userid=$rows[10];
		$password=$rows[11];
		$retype=$rows[12];
		$avail=$rows[13];
		
	}
	}
	//echo $avail;
	if(isset($_POST["btn"]))
	{
		$name=$_POST["name"];
		$blood=$_POST["dpBloodGroup"];
		$gender=$_POST["dpGender"];
		$dob=$_POST["birth"];
		$mobile=$_POST["mobile"];
		$country=$_POST["dpCountry"];
		$state=$_POST["dpState"];
		$city=$_POST["dpCity"];
		$email=$_POST["email"];
		$address=$_POST["address"];
	
		$password=$_POST["pass"];
		$retype=$_POST["pass1"];
		$avail=$_POST["availability"];
		$query1="update reg set name='".$name."',blood='".$blood."',gender='".$gender."',dateofbirth='".$dob."',mobile='".$mobile."',country='".$country."',state='".$state."',city='".$city."',email='".$email."',address='".$address."',password='".$password."',repassword='".$retype."',availability='".$avail."'where userid='".$userid."'";
		
	mysql_query($query1);
		$update=true;
	}
	if(isset($_POST["btnout"]))
	{
		session_destroy();
		header('location:mtalog.php');
			
	}
	
	if(isset($_POST["btndel"]))
	{
		$query2="delete from reg where userid='".$a."'";
		mysql_query($query2);
		
		header('location:mtalog.php');
		
		
	}
  ?>
  <script src="jquery.js"></script>
  <script>
  $(document).ready(function(){
	  
			 $.get("country2.php", function(data, status){
				
				 $("#country").html(data);
			 });	
			 
			 $.post("country2.php",
				{
					con:<?php echo "'".$country."'";?>
				
				},
				function(data,status)
				{
					//alert(data);
					$("#state").html(data);
					
					//alert(status);
					//alert(data);
				}
				);
				$.post("country2.php",
				{
					state:<?php echo "'".$state."'"; ?>
				
				},
				function(data,status)
				{
					//alert(data);
					$("#city").html(data);
					
					//alert(status);
					//alert(data);
				}
				);
			 
			 $("#country").change(function(){
				//alert("uio");
				$.post("country2.php",
				{
					con:$("#country").val()
				
				},
				function(data,status)
				{
					//alert(data);
					$("#state").html(data);
					
					//alert(status);
					//alert(data);
				}
				);
			});
			  $("#state").change(function(){
				//alert("uio");
				$.post("country2.php",
				{
					state:$("#state").val()
				
				},
				function(data,status)
				{
					//alert(data);
					$("#city").html(data);
					
					//alert(status);
					//alert(data);
				}
				);
			 });
			 
			 
			 $("#textbox1").focusout(function(){
					
					if($("#textbox1").val()=="")
					{
						$('#unaginame').text('Name is required');
						$('#unaginame').fadeIn();
						
					}
				});
				$("#dpBloodGroup").focusout(function(){
					if($("#dpBloodGroup").val()=="")
					{
						$('#unagiblood').text('Select a blood group');
						$('#unagiblood').fadeIn();
						
					}
				});
				$("#gender").focusout(function(){
					if($("#gender").val()=="")
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
				$("#country").focusout(function(){
					if($("#country").val()=="")
					{
						$('#unagicountry').text('Select your Country');
						$('#unagicountry').fadeIn();
						
					}
				});
				$("#state").focusout(function(){
					if($("#state").val()=="")
					{
						$('#unagistate').text('Select your State');
						$('#unagistate').fadeIn();
						
					}
				});
				$("#city").focusout(function(){
					if($("#city").val()=="")
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
				
			 
	 });
  </script>
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

	<!--<select name="country" class="countries" id="countryId">
<option value="">Select Country</option>
</select>
<select name="state" class="states" id="stateId">
<option value="">Select State</option>
</select>
<select name="city" class="cities" id="cityId">
<option value="">Select City</option>
</select>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://lab.iamrohit.in/js/location.js"></script>
  
	
	
  </head>
  <body id="bod">
  <div id="container">
	
		
		
		<nav class="navbar navbar-inverse navbar-fixed-top" id="na" data-spy="affix" data-offset-top="297">
  <ul class="nav navbar-nav">
    <li><a href="mtahome.php">Home</a></li>
    <li><a href="mtareg.php">Register</a></li>
    <li><a href="mtarequest.php">Post a request</a></li>
	<li><a href="mtagallery.html">Gallery</a></li>
	<li><a href="mtafindadonor.php">Find a donor</a></li>
	<li class="active"><a href="mtalog.php">Login</a></li>
	<li><a href="mtacontact.php">Contact us</a></li>
    <li><a href="mtafaqs.php">FAQs</a></li>
  </ul>
</nav>

  <form method="post">
			<div class="header" style="margin-top:80px;">
			<h1>Your Details</h1>
			</div>
			 
			 
				 
					<div id="box">
						<table class="table table-hover">
							<tr>
								<td id="td1">Your name</td>
								<td>:</td>
								<td><div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user" aria-hidden="true"></i></span>
									<input type="text" class="form-control" id="textbox1" name="name" id="name"  placeholder="Enter your Name" value="<?php if(isset($_POST['name'])){echo $name;}else echo $name;?>"/>
								</div>
								<div class="alert alert-danger fade in" id="unaginame" style="display:none;">
							
							
								</div>
								</td>
							</tr>
							<tr>
							<td>Blood Group</td>
							<td>:</td>
								<td>
								<select name="dpBloodGroup" id="dpBloodGroup" class="form-control">
								
								<?php
										
									if(isset($_POST["dpBloodGroup"]))
									{
										$arr=array("A+","A-","A1+","A1-","A1B-","A1B+","A2-","A2+","A2B-","A2B+","AB-","AB+","B+","B-","Bombay Blood Group","O+","O-");
										$l=count($arr);
										for($i=0;$i<$l;$i++)
										{
											if($_POST["dpBloodGroup"]==$arr[$i])
												
											{
												echo $arr[$i];
												echo "<option value='$arr[$i]' selected>$arr[$i]</option>";
											}
											else
											{
												echo "<option value='$arr[$i]'>$arr[$i]</option>";
											}
												}
									}
										
										if(!isset($_POST["dpBloodGroup"]))
										{
										mysql_connect("localhost","root");
									mysql_select_db("country");
									$query="select blood from reg where userid='".$a."'";
									$all_rows=mysql_query($query);	
									$arr=array("A+","A-","A1+","A1-","A1B-","A1B+","A2-","A2+","A2B-","A2B+","AB-","AB+","B+","B-","Bombay Blood Group","O+","O-");
										$l=count($arr);
										$rows=mysql_fetch_array($all_rows);
										for($i=0;$i<$l;$i++)
										{
											if($rows[0]==$arr[$i])
												
											{
												echo $arr[$i];
												echo "<option value='$arr[$i]' selected>$arr[$i]</option>";
											}
											else
											{
												echo "<option value='$arr[$i]'>$arr[$i]</option>";
											}
												}
									}
										
										
										?>
										</select>
										<div class="alert alert-danger fade in" id="unagiblood" style="display:none;">
							
							
								</div>
								</td>
								
								
							</tr>
							<tr>
								<td>Gender</td>
								<td>:</td>
								<td><select name="dpGender" id="gender" class="form-control" >
								
								
								<?php 
								if(isset($_POST['dpGender']))
								{
								if($_POST['dpGender']=='M')
								{
								echo "<option value='M' selected>Male</option>";
								echo "<option value='F' >Female</option>";	
								}
								
								
								elseif($_POST['dpGender']=="F"){
								echo "<option value='F' selected>Female</option>";
								echo "<option value='M' >Male</option>";
								}
								
								}
								
								if(!isset($_POST['dpGender']))	
								{
									mysql_connect("localhost","root");
									mysql_select_db("country");
									$query="select gender from reg where userid='".$a."'";
									$all_rows=mysql_query($query);
									$rows=mysql_fetch_array($all_rows);
		
			if($rows[0]=="M"){
				echo "<option value='F' >Female</option>";
								echo "<option value='M' selected >Male</option>";	
			}
			else{
								echo "<option value='F' >Female</option>";
								echo "<option value='M' >Male</option>";	
			}
		
								}
								
								
								?>
								
								
								</select></td>
								
									
							</tr>
							<tr>
								<td>Date Of Birth<br/>(DD/MM/YYYY)</td>
								<td>:</td>
								<td><div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-th" aria-hidden="true"></i></span>
									<input type="text" class="form-control" id="textbox2" name="birth"  value="<?php if(isset($_POST['birth'])){echo $_POST['birth'];}else echo  $dob;?>">
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
									<input type="text" class="form-control" id="textbox3" name="mobile"  placeholder="Mobile No." value="<?php if(isset($_POST['mobile'])){echo $_POST['mobile'];}else{ echo $mobile;}?>"/>
								</div>
								<div class="alert alert-danger fade in" id="unagimobile" style="display:none;">
							
							
								</div>
								</td>
							</tr>
							<tr>
								<td> Country</td>
								<td>:</td>
								<td><select name="dpCountry" id="country" class="form-control">
								
									</select>
									<div class="alert alert-danger fade in" id="unagicountry" style="display:none;">
							
							
								</div>
									</td>
							</tr>
							<tr>
								<td> State</td>
								<td>:</td>
								<td>
							<select name="dpState" id="state" class="form-control">	
							
									
							</select>
							<div class="alert alert-danger fade in" id="unagistate" style="display:none;">
							
							
								</div>
								</td>
								
							</tr>
							
							<tr>
								<td>City</td>
								<td>:</td>
								<td>
								<select name="dpCity" id="city" class="form-control">
							
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
									<input type="text" class="form-control" id="textbox4" name="email" id="name"  placeholder="Email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}else echo $email;?>" />
								</div>
								<div class="alert alert-danger fade in" id="unagiemail" style="display:none;">
							
							
							</div>
								</td>
							</tr>
							<tr>
								<td>Permanent Address</td>
								<td>:</td>
								<td><div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-home" aria-hidden="true"></i></span>
									<input type="text" class="form-control" id="textbox5" name="address" id="name"  placeholder="Permanent Address" value="<?php if(isset($_POST['address'])){echo $_POST['address'];}else echo $address;?>"/>
								</div>
								<div class="alert alert-danger fade in" id="unagiaddress" style="display:none;">
							
							
								</div>
								</td>
							</tr>
							<tr>
								<td>UserId</td>
								<td>:</td>
								<td><div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-user " aria-hidden="true"></i></span>
									<input type="text" class="form-control" id="textbox6" name="userid" id="name"  placeholder="UserId"  value="<?php if(isset($_POST['userid'])){echo $_POST['userid'];}else echo $userid;?>"/>
								</div>
								<div class="alert alert-danger fade in" id="unagiuserid" style="display:none;">
									
								</div>
								</td>
							</tr>
							<tr>
								<td>Password</td>
								<td>:</td>
								<td><div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
									<input type="password" class="form-control" id="textbox7" name="pass" id="name"  placeholder="Password"  value="<?php if(isset($_POST['pass'])){echo $_POST['pass'];}else echo $password;?>"/>
								</div>
								<div class="alert alert-danger fade in" id="unagipass" style="display:none;">
							
							
								</div>
								</td>
							</tr>
							<tr>
								<td>Re-type Password</td>
								<td>:</td>
								<td><div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-lock" aria-hidden="true"></i></span>
									<input type="password" class="form-control" id="textbox8" name="pass1" id="name"  placeholder="Re-type Password" / value="<?php if(isset($_POST['pass1'])){echo $_POST['pass1'];}else echo $retype;?>">
								</div>
								<div class="alert alert-danger fade in" id="unagipassword" style="display:none;">
							
							
								</div>
								</td>
							</tr>
							<tr>
								<td>Please confirm your availability to donate blood</td>
								<td>:</td>
								<td><select name="availability" class="form-control" id="dpBloodGroup6"  >
									
								<?php 
								//if(isset($_POST['availability']))
								//{
								if ($avail=="A")
								{
								echo "<option value='A' selected>Available</option>";
								echo "<option value='N-A' >Not Available</option>";	
								}
								
								
								elseif($avail=="N-A")
								{
								echo "<option value='N-A' selected>Not Available</option>";
								echo "<option value='A' >Available</option>";
								}
								//}
								if(!isset($avail))
								{
								echo "<option value='N-A' >Not Available</option>";
								echo "<option value='A' >Available</option>";	
								}
								?>
								
							
							
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
								<td><input type="submit" class="btn btn-primary" value="Delete Account" name="btndel"/></td>
								<td><input type="submit" class="btn btn-primary" value="Update" name="btn"/></td>
								<td align="right"><input type="submit" class="btn btn-primary" value="logout" name="btnout" /></td>
							</tr>
						</table>
					</div>
		</div>
 	  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</form>	
<div class='modal fade' id='myModal' role='dialog'>
    <div class='modal-dialog'>
    
      <!-- Modal content-->
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
          <h4 class='modal-title'>Profile Updated</h4>
        </div>
        <div class='modal-body'>
          <p>Your profile has been updated successfully.</p>
        </div>
        <div class='modal-footer'>
          <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
        </div>
      </div>
    </div>
  </div>
  
  
  </body>
</html>
<?php 
if(isset($update))
echo "<script>$('#myModal').modal('show')</script>";

?>