<?php
	mysql_connect("localhost","root");
	
	mysql_select_db("country");
	$msg="";
	if(isset($_POST["email1"])){
		$email=$_POST["email1"];
	$query="select * from reg where email='".$email."'";
	$msg="This email alredy exist";
	}
	elseif(isset($_POST["userid1"])){
		$userid=$_POST["userid1"];
		$query="select * from reg where userid='".$userid."'";
	$msg="This userid alredy exist";
	}
	$all_rows=mysql_query($query);
	
	$num=mysql_num_rows($all_rows);
	
	if($num!=0)
	{
		echo $msg;
		
	}
	
		

	
?>