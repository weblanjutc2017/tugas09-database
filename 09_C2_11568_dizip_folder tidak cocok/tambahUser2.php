<?php
$host = "localhost"; // Host name
$username = "root"; // Mysql username
$password = ""; // Mysql password
$db_name = "praktikum9"; // Database name
$conn = mysqli_connect($host, $username, $password, $db_name);
// Check connection
if (!$conn) {
 die("Connection failed: " . mysqli_connect_error());
}
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$uname="select * from user where username='$username'";
$row=mysqli_query ($conn, $uname);
if ($username == "" or $password == ""){
 echo '<script type="text/javascript">
 var answer = alert("Data masih belum lengkap")
 window.location = "tambahUser.php";
 </script>';
}else if(mysqli_num_rows($row)>0){
		echo '<script type="text/javascript">
 var answer = alert("username sudah dipakai")
 window.location = "tambahUser.php";
 </script>';
	}
else{

 $hasil = mysqli_query($conn, $input);
 header('location:index.php?update=2');
}
?>