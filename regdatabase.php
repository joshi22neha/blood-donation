


<!DOCTYPE html>
<html lang="en">
<head>
	<link href="mtaheader.css" rel="stylesheet" />
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

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
	

  <div id="container">
  
	
	<nav class="navbar navbar-inverse navbar-fixed-top" id="na" data-spy="affix" data-offset-top="297">
  <ul class="nav navbar-nav">
    <li><a href="mtahome.php">Home</a></li>
    <li  class="active"><a href="mtareg.php">Register</a></li>
    <li><a href="mtarequest.php">Post a request</a></li>
	<li><a href="#">Gallery</a></li>
	<li><a href="mtafindadonor.php">Find a donor</a></li>
	<li><a href="mtalog.php">Login</a></li>
	<li><a href="mtacontact.php">Contact us</a></li>
    <li><a href="mtafaqs.php">FAQs</a></li>
  </ul>
</nav>

<div class="header" style="margin-top:80px;">
			<h1>successfully registered</h1>
			</div>
			<div id="box">



 <?php
	
	
	mysql_connect("localhost","root");
	
	mysql_select_db("country");
	$name=$_POST["name"];
	$blood=$_POST["dpBloodGroup"];
	$gender=$_POST["dpGender"];
	$date=$_POST["name1"];
	$mobile=$_POST["name2"];
	$country=$_POST["dpCountry"];
	$state=$_POST["dpCountry1"];
	$city=$_POST["dpCountry2"];
	$email=$_POST["name3"];
	$address=$_POST["name4"];
	$userid=$_POST["name5"];
	$password=$_POST["name6"];
	$repassword=$_POST["name7"];
	$availability=$_POST["availability"];
	$query="insert into reg values('$name','$blood','$gender','$date','$mobile','$country','$state','$city','$email','$address','$userid','$password','$repassword','$availability')";
	
	mysql_query($query);
	
	$query1="select * from reg where userid='".$userid."'";
				
				$all_rows=mysql_query($query1);
				echo "<table class='table table-striped'>";
				while($rows=mysql_fetch_array($all_rows))
				{
					echo "<tr>
					<td id='td1'>Your name</td>
					<td>:</td>
					<td>$rows[0]</td>
					</tr>
					<tr>
					<td>Blood Group</td>
					<td>:</td>
					<td>$rows[1]</td>
					</tr>
					<tr>
					<td>Gender</td>
					<td>:</td>
					<td>$rows[2]</td>
					</tr>
					<tr>
					<td>Date Of Birth<br/>(DD/MM/YYYY)</td>
					<td>:</td>
					<td>$rows[3]</td>
					</tr>
					<tr>
					<td>Mobile No.</td>
					<td>:</td>
					<td>$rows[4]</td>
					</tr>
					<tr>
					<td>Country</td>
					<td>:</td>
					<td>$rows[5]</td>
					</tr>
					<tr>
					<td>State</td>
					<td>:</td>
					<td>$rows[6]</td>
					</tr>
					<tr>
					<td>City</td>
					<td>:</td>
					<td>$rows[7]</td>
					</tr>
					<tr>
					<td>Email</td>
					<td>:</td>
					<td>$rows[8]</td>
					</tr>
					<tr>
					<td>Permanent Address</td>
					<td>:</td>
					<td>$rows[9]</td>
					</tr>
					<tr>
					<td>UserId</td>
					<td>:</td>
					<td>$rows[10]</td>
					</tr>
					";
				}
				echo "</table>";
			?>
			</div><!--box-->
			
</div><!--container-->
	
  </body>
</html>	
	
