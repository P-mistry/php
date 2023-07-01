<html>
	<head>
		<title>Connecting with Database</title>
	</head>
			<body>
				<?php
					$staruser="root";
					$starpass="";
					$stardb='staredudatabase';
					$stardb=mysqli_connect("localhost",$staruser,$starpass,$stardb) or die ("Cannot connect to the database right now");
					echo "Established a connectivity with the database<br/>";
					$ins='INSERT INTO record '.' (Name,Rollno,Year,per) '.' 
						VALUES ("Parth",1409876,4,75.8)';
					$ins='INSERT INTO record '.' (Name,Rollno,Year,per) '.' 
						VALUES ("meet",1409876,4,75.8)';
					$ins='INSERT INTO record '.' (Name,Rollno,Year,per) '.' 
						VALUES ("jeet",1409876,4,75.8)';
					$ins='INSERT INTO record '.' (Name,Rollno,Year,per) '.' 
						VALUES ("malav",1409876,4,75.8)';
					$query = mysqliw_query($stardb,$ins);
					if(!$query)
						echo "Problem in insertion";
					else
						echo "Data inserted successfully";
				?>
		</body>
</html>