<?php
require_once 'koneksi.php';

$no = $_GET[id];

$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$que="select * from user where username='$username'";
$row=mysqli_query ($conn, $que);
if ($username == "" or $password == ""){
 echo '<script type="text/javascript">
 var answer = alert("Data masih belum lengkap")
 window.location = "updateUser.php";
 </script>';
}else if(mysqli_num_rows($row)>0){
		echo '<script type="text/javascript">
 var answer = alert("username telah digunakan")
 window.location = "updateUser.php";
 </script>';
	}
else{
		$input = "update user set username='$username', password='$password', level='$level' where no=$no";
		$hasil = mysqli_query($conn, $input);
		header('location:index.php?update=1');
}
?>