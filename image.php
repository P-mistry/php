<html>
<body>
	<?php
$number = rand(1, 3);
echo "Randomly generated  Image :";
switch ( $number )
{
	case 1: $Image = "D:\New folder\ppp.jpg";
	break;
	case 2: $Image = "D:\New folder\pm.jpg";
	break;
	case 3: $Image = "D:\New folder \pm1.jpg";
	break;
}
	echo "<br/><img src= $Image />";
	?>
</body>
</html>


