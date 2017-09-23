<?php
	$host = "localhost"; // Host name
	$username = "root"; // Mysql username
	$password = ""; // Mysql password
	$db_name = "praktikum8"; // Database name
	$conn = mysqli_connect($host, $username, $password, $db_name);
	// Check connection
	if (!$conn) {
	 die("Connection failed: " . mysqli_connect_error());
	}
	$username = $_POST['username'];
	$password = $_POST['password'];
	$level = $_POST['level'];
	$id=$_GET['id'];
	$update=("UPDATE user SET username='$username',password='$password',level='$level' where id='$id'");
	$query = mysqli_query($conn, $update) or die(mysql_error($conn));
	//kembali ke halaman user.php
	header('location:index.php?update=1');
	exit;
?>