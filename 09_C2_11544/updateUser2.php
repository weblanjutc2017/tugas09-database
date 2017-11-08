<?php
$id = $_GET['id'];
?>
<?php
require_once 'koneksi.php';


//$id = $_GET['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$update = "update user set username='$username', password='$password', level='$level' where id='$id'";

$hasil = mysqli_query($conn, $update);
header('location:index.php?update=4');

?>