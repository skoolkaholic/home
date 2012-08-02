<?php 

	mysql_connect("localhost","root","BGQRUR45PK") or die(mysql_error());
	mysql_select_db("test") or die(mysql_error());


	$query = mysql_query("select * from test") or die(mysql_error());
	while ($row = mysql_fetch_array($query))
	{
		echo $row["username"]."<br>";
	} 

	 
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	
	<p>this is spartaaa</p>	
	<?php echo $this  ?>
</body>
</html>
