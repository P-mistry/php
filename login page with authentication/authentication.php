<html>
	<head>
		<title>Securing PHP Application</title>
	</head>
<body>
	<center>
		
		<?php
		$starconn=mysqli_connect("localhost","root","") or die("Couldn't connect");
		mysqli_select_db($starconn,"staredudatabase");

		$sqli = "SELECT * FROM valid_users";
		$rec = mysqli_query($starconn,$sqli);*/\
		?>

	<p><h1>Welcome to our website</h1></p>
	<p><b>Creat Account</b></p>
	<?php
		echo "<tr><from action=creating.php method = post>";
		echo "<td><input type =submit valu=Go_to_Create_Account_Page>";
		echo "</from></tr>";
	</center>
</body>