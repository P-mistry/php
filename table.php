<html>
<body>
	<?php
	error_reporting(E_ALL);
	ini_set('display_errors',1);
	$starhost='localhost';
	$staruser='root';
	$starpass='';
	$stardbname='starnewdb';
	$starconn= new mysqli($starhost,$staruser,$starpass,$stardbname) or die ("Couldn't connect to the database");
	echo "Connected to $stardbname<br/>";
	$sql = "CREATE TABLE student (roll int(10), name varchar(20),marks int(4))";
	$result= mysqli_query($starconn,$sql);
	if(!$result) 
	{
		die('Error running the query['. $db->error . ']');
	}
	else
	{
		echo"Table created successfully!";
	}
?>
</body>
</html>