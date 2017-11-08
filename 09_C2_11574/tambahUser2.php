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
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$level = $_POST['level'];
	$input = "insert into user(username, password, level) values ('$username', '$password','$level')";
	if ($username == "" or $password == ""){
		echo '<script type="text/javascript">
		var answer = alert("Data masih belum lengkap")
		window.location = "tambahUser.php";
		</script>';
	}

	else{
		$sql="SELECT * FROM user WHERE username='$username'";
		$query = mysqli_query($conn,$sql);

		if(mysqli_num_rows($query) > 0){
			header('location:tambahUser.php?tambah=1');
			exit;
		}
		else{
			$hasil = mysqli_query($conn, $input);
			header('location:index.php?update=2');
			exit;
		}
	}
?>