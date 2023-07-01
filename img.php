

<html>
<body>
    <?php
$number = rand(1, 3);
  switch ($number) {
    case "0":$Image=  echo "D:\New folder\ppp.jpg";
        break;
    case "1":$Image= echo "D:\New folder\pm.jpg";
        break;
    case "2":$Image= echo "D:\New folder\pm1.jpg";
        break;
       
}
echo "<br/><img src= $Image />";
    ?>
</body>
</html>
}