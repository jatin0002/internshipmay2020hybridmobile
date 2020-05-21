<?php
$rollno = $_POST['rollno'];
$sql = "SELECT * FROM student WHERE rollno='$rollno'";
$cn = mysqli_connect("localhost", "root" , "" , "abesec") ;
$result = mysqli_query($cn, $sql);
print "$result";
$count = mysqli_num_rows($result);
echo $count;
if($count == 0){
	echo "Sorry! Invalid Roll Number";
}else{
	$row = mysql_fetch_array($result);
	echo "Name is $row[1] and Course is $row[2]";
}
 mysqli_close($cn);
?>