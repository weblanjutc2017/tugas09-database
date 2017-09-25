<?php
require_once 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$input = "insert into user(username, password, level) values ('$username', '$password',
'$level')";
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