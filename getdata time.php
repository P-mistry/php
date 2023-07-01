<html>
	<head>
		<title>Handling dates and Times in php 7</title>
	</head>
	<body>
		<?php
		$date = getdate();
		echo "<center><b><h3>The complete information about today's time and date is as follow:<br/><br/></h3></b></center>";
			foreach ($date as $index => $value) {
				echo "<center>$index : $value<br /></center>";
			}
			$current_date = "Today is: ";
			$current_date .= $date['mday'] . "/";
			$current_date .= $date['mon'] . "/";
			$current_date .= $date['year'];
			echo "<br/><center><b>".$current_date."</b></center></br>";
		?>
	</body>
</html>
