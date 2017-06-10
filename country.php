<?php
session_start();
$country=$_SESSION['CON'];
echo $country;
mysql_connect("localhost","root");
		mysql_select_db("country");
		$query1="select distinct(country) from details order by country ASC";
		
		
		
		

if(isset($_POST["con"]))
{         
$coin=$_POST["con"];
echo $coin;
echo "<br/>";
	echo "oip";
	$query1="select distinct(state) from details where country='".$_POST["con"]."'";
echo "<br/>";
	echo "poi";
}
else if (isset($_POST["state"]))
{
	$query1="select distinct(city) from details where state='".$_POST["state"]."'";
}
$all_rows=mysql_query($query1);
$count=mysql_num_rows($all_rows);
		
echo "<option>-----select-----</option>";
		while($rows=mysql_fetch_array($all_rows))
		{
			if($country==$rows[0])
			{
			echo "<option value='$rows[0]'selected >$rows[0]</option>";	
			}
			else{
			echo "<option value='$rows[0]' >$rows[0]</option>";
			}
		}
session_destroy();
?>