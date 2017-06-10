<?php
session_start();
$a=$_SESSION['fav'];	
	
mysql_connect("localhost","root");
	mysql_select_db("country");		
	$query1="select distinct(country)  from details order by country ASC";	
	$query="select *  from reg where userid='".$a."'";	
$all=mysql_query($query);

while($row=mysql_fetch_array($all))
{
	$arr=$row[5];
	$arr1=$row[6];
	$arr2=$row[7];
}
 if (isset($_POST["con"]))
{
	$query1="select distinct(state) from details where country='".$_POST["con"]."'";
	$all_rows=mysql_query($query1);

	echo "<option>-----select-----</option>";
		while($rows=mysql_fetch_array($all_rows))
		{
		
		
			
			 if($arr1!=$rows[0])
			{
			echo "<option value='$rows[0]' >$rows[0]</option>";	
			}
			else
			{
			echo "<option value='$rows[0]'selected >$rows[0]</option>";	
			}
			
		}
}
else if (isset($_POST["state"]))
{
	$query1="select distinct city from details where state='".$_POST["state"]."'";
	$all_rows=mysql_query($query1);

	echo "<option>-----select-----</option>";
		while($rows=mysql_fetch_array($all_rows))
		{
		
		
			if($arr2!=$rows[0])
			{
			echo "<option value='$rows[0]'>$rows[0]</option>";	
			}
			else
			{
			echo "<option value='$rows[0]' selected >$rows[0]</option>";	
			}
			
		}
}

else{
	$all_rows=mysql_query($query1);

echo "<option>-----select-----</option>";
		while($rows=mysql_fetch_array($all_rows))
		{
		
			if($arr!=$rows[0])
			{
				
			echo "<option value='$rows[0]' >$rows[0]</option>";
			}
			
			else if($arr==$rows[0])
			{
				echo "<option value='$rows[0]' selected >$rows[0]</option>";
			}
			
		}
}
		

?>