 <?php
 
	mysql_connect("localhost","root");
	
	mysql_select_db("country");
	
	$patientname=$_POST["patientname"];
	$patientblood=$_POST["BloodGroup"];
	$patientage=$_POST["patientage"];
	$patientneed=$_POST["patientneed"];
	$patientunit=$_POST["patientunit"];
	$patientnumber=$_POST["patientnumber"];
	$patienthospital=$_POST["patienthospital"];
	$patientlocation=$_POST["patientlocation"];
	$patientaddress=$_POST["patientaddress"];
	
	$query="insert into request values('$patientname','$patientblood','$patientage','$patientneed','$patientunit','$patientnumber','$patienthospital','$patientlocation','$patientaddress')";
	mysql_query($query);
	
 ?>