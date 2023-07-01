<html>
<head>
	<title>Connecting with database</title>
</head>
	<body>
		<?php
		$staruser = "root";
		$starpass = "";
		$stardb = new
mysqli("localhost",$staruser,$starpass) or die("cannot connect to the database right now");
echo "Established a connectivity with the database<br/>";
$ins = 'CREATE Database staenewdb';
$query = $stardb->query($ins);
if(!$query)
	echo "Problem in creation";
else
	echo "New database created";
		?>
	</body>
</html>