<?php
$id=$_GET['id'];
?>
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

$sql=("UPDATE user SET username='$username',password='$password',level='$level' where id='$id'");

 $hasil = mysqli_query($conn, $sql);
 header('location:index.php?update=4');



?>