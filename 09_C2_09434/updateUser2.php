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
$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$update = "update user set username='$username', password='$password', level='$level' where id='$id'";
if ($username == "" or $password == ""){
echo '<script type="text/javascript">
var answer = alert("Data masih belum lengkap") window.location = "updateUser.php";
</script>';
}else{
$hasil = mysqli_query($conn, $update);
header('location:index.php?update=1');
}
?>