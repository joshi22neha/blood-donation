<?php
		mysql_connect("localhost","root");
		
		mysql_select_db("country");
		
		$query="select distinct(country) from details order by country ASC";
		
		if(isset($_POST["country"]))
		{
		$query="select distinct(state) from details where country='".$_POST["country"]."'order by state ASC";
		}
		else if(isset($_POST["state"]))
			{
			$query="select distinct(city) from details where state='".$_POST["state"]."'order by city ASC";
			}
		
		$all_rows=mysql_query($query);
		echo "<option value=''>-----Select-----</option>";
		while($row=mysql_fetch_array($all_rows))
		{
			echo "<option value='$row[0]'>$row[0]</option>";
		}
		
		
		
		
		
?>