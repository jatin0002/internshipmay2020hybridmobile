<?php
$rollno = $_POST['rollno'];
$sql = "SELECT * FROM student WERE rollno='$rollno'";
$cn = mysqli_connect("localhost", "root", "", "abesec");
$result = mysqli_query($cn, $sql);
$count = mysqli_num_rows($result);
echo($count);
if ($count == 0) {
	echo "Sorry! Invalid Roll Number";
} else {
	$row = mysqli_fetch_array($result);
	echo "Name is $row[1] and Course is $row[2]";
}
mysqli_close($cn);
