<?php

$rollno = $_POST['rollno'];
$name = $_POST['name'];
$course = $_POST['course'];

$sql = "INSERT INTO student VALUES('$rollno' , '$name' , '$course')";
$cn = mysqli_connect("localhost", "root" , "" , "abesec") or die("Unable to send");

mysqli_query($cn, $sql) or die("Unable to insert data") ;
mysqli_close($cn);
echo "done";


?>