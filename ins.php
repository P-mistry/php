<html>
<body>
<?php
$starhost = "localhost";
$staruser = "username";
$starpass = "";
$stardb = "staredudatabase";

// Create connection
$conn = new mysqli($starhost, $staruser, $starpass, $stardb);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = 'INSERT INTO studentrecord (Name,Rollno,year,Percentage)
VALUES ("parth",12345,4,85.7)';

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>