<?php
	require_once 'koneksi.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$level = $_POST['level'];
	//validasi
	$select="select * from user where username='$username'";
	$query=mysqli_query ($conn, $select);
	if ($username == "" or $password == ""){
		echo '<script type="text/javascript">
		var answer = alert("Data masih belum lengkap")
		window.location = "tambahUser.php"; </script>';
	}
		else if(mysqli_num_rows($query)>0)
	{
		echo '<script type="text/javascript">
		var answer = alert("Username Sudah Ada!")
		window.location = "tambahUser.php"; </script>';
	}
	else
	{
		$input = "insert into user(username, password, level) values ('$username', '$password','$level')";
		$hasil = mysqli_query($conn, $input);
		header('location:index.php?update=2');
	}
?>