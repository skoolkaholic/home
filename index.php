<?php 

	mysql_connect("localhost","root","BGQRUR45PK") or die(mysql_error());
	mysql_select_db("test") or die(mysql_error());


	$query = mysql_query("select * from test") or die(mysql_error());
	while ($row = mysql_fetch_array($query))
	{
		echo $row["username"]."<br>";
	} 

	 
?>

