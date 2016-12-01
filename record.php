<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}

$conn = mysql_connect("localhost","root","kck1710") or die(mysql_error());
mysql_select_db("wiz", $conn) or die(mysql_error());

mysql_query("ALTER TABLE data AUTO_INCREMENT = 0");

$name = $_POST['name'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$age = $_POST['age'];
$grade = $_POST['grade'];

$rec = "insert into data values('','$name','$mname','$lname','$age','$grade')";

if(mysql_query($rec)){
	echo "<center></h1>Data inserted in the database</h1></center>"."<br />";
	echo "<center></h6>Please wait while you are redirected in 3 seconds</h6></center>"."<br />";
	header('Refresh: 3; url=home.php');
}
else{
	die("Data failed to insert in the database");
}
?>
