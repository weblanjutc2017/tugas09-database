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
	$que="select * from user where username='$username'";
	$row=mysqli_query ($conn, $que);
	
	$cek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM user WHERE username='$username'"));
    if ($cek > 0){
		echo "<script>window.alert('username yang anda masukan sudah ada')
				window.location='index.php'</script>";
		}else {
			mysqli_query($conn,"INSERT INTO user(username, password, level)
				VALUES ('$username','$password','$level')");
				header('location:index.php?update=2');
					}
			
	
?>