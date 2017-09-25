<?php $no=$_GET['id'];
?>
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
		header('location:index.php?update=2');
}
?>