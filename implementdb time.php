<html>
	<head>
		<title>Handling dates and times in php 7</title>
	</head>
		<body>
			<?php
			$t1 = date("h : i A");
			$t2 = date("h : i A",1500377846);
			echo "The current time is $t1<br/>";
			echo "The time of formate time stamp (1500377846) was $t2<br/>";
			$d1 = date("j - m - Y");
			$d2 = date("j - m - Y",1200377846);
			$d11 = date("1");
			$d22 = date("1",1200377846);
			echo "The current date is $d1 and the day is $d11<br/>";
			echo "The date of former time stamp (1200377846) was $d2 and the day was $d22";
			?>
		</body>
</html>