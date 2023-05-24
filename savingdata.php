<?php
echo $Email=$_POST['email'];
echo $password=$_POST['pas'];
echo $confirm=$_POST['cpas'];


$conn=mysqli_connect("localhost","root","","roze") or die("connection Failed");
$sql= "INSERT INTO details(email,password,confirmpassword) VALUES ('{$Email}','{$pas}','{$cpas}')";
$result= mysqli_query($conn,$sql) or die("query uncessfull");


mysqli_close($conn);


?>