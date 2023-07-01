<html>
<head>
	<title>pre/post-increment/decrement</title>
</head>
<body>
	<?php
		$w=$var1=10;
		$x=$var2=5;
		$y=$var3=20;
		$z=$var4=15;
		$a=++$var1;
		$b=$varx2++;
		$c=--$var3;
		$d=$var4--;
		echo "initial value of variable_1 is : $w<br/>
		initial value of variable_2 is : $x<br/>
		initial value of variable_3 is : $z<br/><br/>";
		echo "pre-incrementing variable_1 we get : $a<br/>";
		echo "post-incrementing variable_2 we get : $b<br/>";
		echo "variable_2 after the post-increment : $var2<br/>";
		echo "pre-decrementing variable_3 we get : $c<br/>";
		echo "post-decrementing variable_4 we get : $d<br/>";
		echo "variable_4 after the post-decrement : $var4";
	?>
</body>
</html>