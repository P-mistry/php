<html>
<head>
	<title>Connecting with Databases</title>
</head>
<body>
	<?php
	$starhost = "localhost";
	$staruser = "root";
	$starpass = "";
	$starconn = mysqli_connect($starhost, $staruser, $starpass) or die ('Could not connect: ' . mysqli_error());
	$sql = 'SELECT Rollno, Name, Year Percentage FROM record';
	mysqli_select_db($starconn,'staredudatabase');
	$retval = mysqli_query( $starconn, $sql );
	if(! $retval )
	{
		die('Could not get data: ' . mysqli_error());
	}
	while($row = mysqli_fetch_array($retval, MYSQLI_ASSOC))
	{
		echo "Rollno : {$row['Rollno']} <br/>".
		"Name : {$row['Name']} <br/>".
		"Year : {$row['year']} <br/>".
		"Percentage : {$row['Percentage']} <br/>".
		"********************************<br/>";
	}
	echo "Fetching Successful\n";
	mysqli_close($starconn);
	?>
</body>
</html>