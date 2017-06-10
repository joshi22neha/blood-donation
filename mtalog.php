<!DOCTYPE html>
<html lang="en">
<head>
<link href="mtaheader.css" rel="stylesheet" />
  <title>Blood Donation</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="jquery.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


<script>

	$(document).ready(function(){
				
				
				$("#td2").focusout(function(){
					
					if($("#td2").val()=="")
					{
						$('#unagiuserid').text('userid is required');
						$('#unagiuserid').fadeIn();
						
					}
				});
				$("#td3").focusout(function(){
					
					if($("#td3").val()=="")
					{
						$('#unagipass').text('Please enter the password');
						$('#unagipass').fadeIn();
						
					}
				});
				
	});
</script>

  <?php
session_start();
?>
<?php
	$err="";
if($_SERVER["REQUEST_METHOD"]=="POST")
	{
	
	$userid=$_POST["userid"];
	$pass=$_POST["pass"];
	mysql_connect("localhost","root");
	mysql_select_db("country");
	$query="select * from reg where binary userid='".$userid."'";
	$all_rows=mysql_query($query);
	$count=mysql_num_rows($all_rows);
	if($count!=0)
	{
		$query1="select password from reg where userid='".$userid."'";
		$all_rows1=mysql_query($query1);
		while($rows=mysql_fetch_array($all_rows1))
		{
			
			
			if($rows[0]==$pass)
			{
				echo "done";
				$_SESSION['fav']=$userid;
				$_SESSION['islogged']=true;
				header('location:mtadetails.php');
			}
			else
			{
			 //$err="incorrect password";
			 echo "<script>
				$(document).ready(function(){
					
					
						
						
							$('#unagipass').text('Incorrect password');
						$('#unagipass').fadeIn();
						
				
					
				});
			 </script>";
			}
		}
	}
	elseif($count==0)
	{
		//echo "<script>$('#myModal').modal('show')</script>";
		//echo "<script>alert('account does not exist')</script>";
		
		$exist=true;
	}



	}
?>
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
			<h1>Login</h1>
			</div>
			<div id="box">
			<table class="table table-hover">
		<tr><td id="td1">Enter your user id</td>
		<td>:</td>
		<td>
		<input type="text" id="td2"  name="userid" required/>
		<div class="alert alert-danger fade in" id="unagiuserid" style="display:none;">
							
							
								</div>
		</td>
		</tr>
		<tr>
		<td>Enter your password</td>
		<td>:</td>
		
		<td><input type="password" id="td3"  name="pass" required/>
		<div class="alert alert-danger fade in" id="unagipass" style="display:none;">
							
							
					</div>
		</td>
		
		</tr>
		<tr>
		<td></td>
		<td><input type="submit" id="btn1" class="btn btn-primary" value="Login"/></td>
		<td></td>
		</tr>
		</table>
		
	</form>
	
	
	</div><!--box-->
	</div><!--container-->
	
	<div class='modal fade' id='myModal' role='dialog'>
    <div class='modal-dialog'>
    
      <!-- Modal content-->
      <div class='modal-content'>
        <div class='modal-header'>
          <button type='button' class='close' data-dismiss='modal'>&times;</button>
          <h4 class='modal-title'>No accounts found</h4>
        </div>
        <div class='modal-body'>
          <p>Sorry there is no such account.Please register your account.</p>
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
if(isset($exist))
echo "<script>$('#myModal').modal('show')</script>";
?>