<?php
	$host = "localhost"; // Host name
	$username = "root"; // Mysql username
	$password = ""; // Mysql password
	$db_name = "loginan"; // Database name
	$conn = mysqli_connect($host, $username, $password, $db_name);

	// Check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	
	$id= $_POST['id'];
	$password = $_POST['password'];
	$level = $_POST['level'];
	$sql = "SELECT password FROM user where id=$id";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	$ps=$row['password']; //data password dari id yg akan diganti passwordnya
	
	
	if($password == ""){
		header('location:updateUser.php?update=2&id='.$id);
		exit;
	}
	else if($password==$ps){
		header('location:updateUser.php?update=3&id='.$id);
		exit;
	}
	else{
		$update = "UPDATE user SET password='$password',level='$level' WHERE id='$id'";
		$query = mysqli_query($conn, $update);
		header('location:index.php?update=1');
		exit;
	}
	
?>