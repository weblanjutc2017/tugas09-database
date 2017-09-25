<?php
require_once 'connection.php';

/*
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

$sql_cek="select * from user where username='$username'";
$query = mysqli_num_rows(mysqli_query($conn, $sql_cek)) or die(mysqli_error($conn));

$input = "insert into user(username, password, level) values ('$username', '$password','$level')";

if ($username == "" or $password == ""){
 echo '<script type="text/javascript">
 var answer = alert("Data masih belum lengkap")
 window.location = "tambahUser.php";
 </script>';
}if ($query > 0) {
	echo '<script type="text/javascript">
 var answer = alert("Username sudah ada!")
 window.location = "tambahUser.php";
 </script>';
}
else{
 $hasil = mysqli_query($conn, $input);
 header('location:index.php?update=2');
}
*/


$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$input = "insert into user(username, password, level) values ('$username', '$password',
'$level')";

$sql_cek="select * from user where username='$username'";
$query = mysqli_num_rows(mysqli_query($conn, $sql_cek));

if ($username == "" or $password == ""){
 echo '<script type="text/javascript">
 var answer = alert("Data masih belum lengkap")
 window.location = "tambahUser.php";
 </script>';
}

if ($query > 0) {
	echo '<script type="text/javascript">
 var answer = alert("Username sudah ada!")
 window.location = "tambahUser.php";
 </script>';
}else{
 $hasil = mysqli_query($conn, $input);
 header('location:index.php?update=2');
}
?>