<?php
	session_start();
	$valid = $_SESSION['valid'];
	if(!$valid || $valid == ""){
	header("Location:index.php");
	}

$conn = mysql_connect("localhost","root","kck1710") or die(mysql_error());
mysql_select_db("wiz", $conn) or die(mysql_error());

$name = $_POST['name'];
$pass = $_POST['pass'];

$rec = "insert into users values('','$name',md5('$pass'))";

if(mysql_query($rec)){
	echo "<center></h1>User is Added in the database</h1></center>"."<br />";
	echo "<center></h6>Please wait while you are redirected in 3 seconds..</h6></center>"."<br />";
	header('Refresh: 3; url=add.php');
}
else{
	die("User adding error");
}
?>
