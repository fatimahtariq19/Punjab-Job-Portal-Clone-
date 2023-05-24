<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "roze";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO details (email,pas,cpas)
VALUES ('".$_REQUEST['email']."', '".$_REQUEST['password']."', '".$_REQUEST['confirmpassword']."')";

// $qry = "insert into users() values("...")";


if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>