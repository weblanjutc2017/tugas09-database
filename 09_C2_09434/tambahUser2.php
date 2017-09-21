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
	$input = "insert into user(username, password, level) values ('$username', '$password','$level')";
	$cek = "select username from user where username='$username'";
	$check = mysqli_query($conn, $cek);
	
	if ($username == "" or $password == ""){
		echo '<script type="text/javascript">
			alert("Data masih belum lengkap"); window.location = "tambahUser.php";
			</script>';
	}elseif($check){
		echo '<script type="text/javascript">
			alert("Data telah digunakan"); window.location = "tambahUser.php";
			</script>';
	}else{
		$hasil = mysqli_query($conn, $input);
		header('location:index.php?update=2');
	}
?>