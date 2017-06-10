<!DOCTYPE html>
<html lang="en">
  <head>
  <?php
session_start();
?>
  <link href="mtaheader.css" rel="stylesheet" />
  <script src="jquery.js"></script>
  <script>
  $(document).ready(function(){
	 
	 // alert("hiii");
 $.get("country.php", function(data, status){
	 //alert(data);
	 $("#country").html(data);
 });	
 $("#country").change(function(){
	//alert("uio");
	$.post("country.php",
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
	$.post("country.php",
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
 
 $("#btn").click(function(){
	 
	 $("#tabdiv").slideDown(50000);
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
	
  </head>
  <body id="bod">
  
  <div class="container">
  
  
  <nav class="navbar navbar-inverse navbar-fixed-top" id="na" data-spy="affix" data-offset-top="297">
  <ul class="nav navbar-nav">
    <li><a href="mtahome.php">Home</a></li>
    <li><a href="mtareg.php">Register</a></li>
    <li><a href="mtarequest.php">Post a request</a></li>
	<li><a href="mtagallery.html">Gallery</a></li>
	<li  class="active"><a href="mtafindadonor.php">Find a donor</a></li>
	<li><a href="mtalog.php">Login</a></li>
	<li><a href="mtacontact.php">Contact us</a></li>
    <li><a href="mtafaqs.php">FAQs</a></li>
  </ul>
</nav>
  
  
	<form method="post" >
	
			<div class='modal fade' id='myModal' role='dialog'>
    <div class='modal-dialog'>
    
      <!-- Modal content-->
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
          <h4 class='modal-title'>No donors available</h4>
        </div>
        <div class='modal-body'>
          <p>Sorry there are no donors available.Please post your request as per your need.</p>
        </div>
        <div class='modal-footer'>
          <button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
        </div>
      </div>
      
    </div>
  </div>
			<div class="header" style="margin-top:80px;">
			<h1>Find a Donor</h1>
			</div>
			 <!--button type="button" class="btn btn-info" data-toggle="collapse" id="btn" data-target="#box">Click me</button-->
			 
				 
					<div id="box">
						<table class="table table-hover">
							
						
							<tr>
							<td id="td1">Blood Group</td>
							<td>:</td>
								<td><select name="Blood" id="dpBloodGroup" class="form-control">
								
									<?php
									
									if(isset($_POST["Blood"]))
									{
										$arr=array("A+","A-","A1+","A1-","A1B-","A1B+","A2-","A2+","A2B-","A2B+","AB-","AB+","B+","B-","Bombay Blood Group","O+","O-");
										$l=count($arr);
										for($i=0;$i<$l;$i++)
										{
											if($_POST["Blood"]==$arr[$i])
												
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
										
										if(!isset($_POST["Blood"]))
										{
										echo "<option value='0'>-----select-----</option>";	
										echo "<option value='A+'>A+</option>";
										echo "<option value='A-'>A-</option>";
										echo "<option value='A1+'>A1+</option>";
										echo "<option value='A1-'>A1-</option>";
										echo "<option value='A1B+'>A1B+</option>";
										echo "<option value='A1B-'>A1B-</option>";
										echo "<option value='A2+'>A2+</option>";
										echo "<option value='A2-'>A2-</option>";
										echo "<option value='A2B+'>A2B+</option>";
										echo "<option value='A2B-'>A2B-</option>";
										echo "<option value='AB+'>AB+</option>";
										echo "<option value='AB-'>AB-</option>";
										echo "<option value='B+'>B+</option>";
									
										echo "<option value='B-'>B-</option>";
										echo "<option value='Bombay Blood Group'>Bombay Blood Group</option>";
										echo "<option value='O+'>O+</option>";
										echo "<option value='O-'>O-</option>";
										}
										
									?>
									</select>
								</td>
								
								
							</tr>
							
							<tr>
								<td>Select Country</td>
								<td>:</td>
								<td><select name="country" id="country" class="form-control">
									
									<?php
									
									
									if(isset($_POST["country"]))
									{
										
										mysql_connect("localhost","root");
		mysql_select_db("country");
		$query1="select distinct(country)  from details order by country ASC";
		$all_rows=mysql_query($query1);
		while($rows=mysql_fetch_array($all_rows))
		{
			echo"while";
			if($rows[0]==$_POST["country"])
			{
				echo "<option value='$rows[0]'selected >$rows[0]</option>";
			}
			else
			{
			echo "<option value='$rows[0]' >$rows[0]</option>";
			}
									}
									}
									
									?>
									
								</td>
								</select>
							</tr>
							<tr>
								<td>Select State</td>
								<td>:</td>
								<td><select name="state" id="state" class="form-control">
									
									<option value="0">-----Select-----</option>
									<?php
									if(isset($_POST["state"]))
									{
										
									
									mysql_connect("localhost","root");
		mysql_select_db("country");
		$query1="select distinct(state) from details where country='".$_POST["country"]."'";
		$all_rows=mysql_query($query1);	
while($rows=mysql_fetch_array($all_rows))
{
	if($rows[0]==$_POST["state"])
	{
	echo "<option value='$rows[0]'selected >$rows[0]</option>";
	}
	else{
		echo "<option value='$rows[0]' >$rows[0]</option>";
	}
}
	}
	
									
									?>
									
								</td>
								</select>
							</tr>
							
							<tr>
								<td>Select City</td>
								<td>:</td>
								<td><select name="city" id="city" class="form-control">
									<option value="0">-----Select-----</option>
									<?php
									if(isset($_POST["city"]))
									{
										
									
									mysql_connect("localhost","root");
		mysql_select_db("country");
		$query1="select distinct(city) from details where state='".$_POST["state"]."'";
		$all_rows=mysql_query($query1);	
while($rows=mysql_fetch_array($all_rows))
{
	if($rows[0]==$_POST["city"])
	{
	echo "<option value='$rows[0]'selected >$rows[0]</option>";
	}
	else{
		echo "<option value='$rows[0]' >$rows[0]</option>";
	}
}
	}
									?>
									
								</td>
								</select>
							</tr>
							<tr>
								
							<tr>
								<td></td>
								<td><input type="submit"  class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal" value="Find" name="btn" id="btn"/></td>
								<td></td>
							</tr>
							
								
								
								
								</table>
								
							
						

						
	
					
					<!--/div-->
	
		
 	  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</form>	

 <?php

if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		mysql_connect("localhost","root");
	mysql_select_db("country");
		//$name=$_POST["name"];
			$blood=$_POST["Blood"];
				$country=$_POST["country"];
					$state=$_POST["state"];
						$city=$_POST["city"];
						//echo $blood;
						//echo $country;
						$_SESSION['CON']=$country;

	$query="select * from reg where blood='".$blood."'and country='".$country."'and state='".$state."'and city='".$city."'";
	
	$all_rows=mysql_query($query);
	$count=mysql_num_rows($all_rows);
	if($count==0)
	{
		echo "<script>$('#myModal').modal('show')</script>";
	}
	else
	{
		echo "<div id='tabdiv'><table class='table table-striped' id='tab'><tr ><thead><th style='width:300px'>NAME</th><th style='width:300px'>MOBILE NUMBER</th><th style='width:300px'>EMAILID</th><th style='width:300px'>AVAILABILITY</th></thead></tr></table></div>";
	while($rows=mysql_fetch_array($all_rows))		
	{
	
		echo "<div id='tabdiv'><table id='tab1' class='table table-striped'><tr ><tbody><td style='width:300px'>$rows[0]</td><td style='width:300px'>$rows[4]</td><td style='width:300px'>$rows[8]</td><td style='width:300px'>$rows[13]</td></tbody></tr></table></div>";
		
	
	}
	}
	
	}
	
  ?>

</div>
</div>
 </body> 
 
	

</html>