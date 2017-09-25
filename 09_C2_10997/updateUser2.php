<?php
	require_once 'koneksi.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$level = $_POST['level'];
	$id=$_GET['id'];
	$select="select * from user where username='$username'";
	$query=mysqli_query ($conn, $select);
	if ($username == "" or $password == ""){
		echo '<script type="text/javascript">
		var answer = alert("Data masih belum lengkap")
		window.location = "tambahUser.php"; </script>';
	}
	else if(mysqli_num_rows($query)>0){
		echo '<script type="text/javascript">
		var answer = alert("Username Sudah Ada!")
		window.location = "tambahUser.php"; </script>';
	}
	else{
		$update = ("UPDATE user SET username='$username',password='$password',level='$level' where id='$id'");
		$query = mysqli_query($conn, $update)or die(mysql_error($conn));
		header('location:index.php?update=2');
	}
	
	//kembali ke halaman user.php
	//header('location:index.php?update=1');
	exit;
?>
