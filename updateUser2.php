<?php
require_once 'connection.php';
//$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$id = $_POST['id']; 
$sql = "update user set password='$password', level='$level' where id='$id';";
if (mysqli_query($conn, $sql)) {
 echo "Data berhasil diperbaharui.";
 header('location:index.php?update=1');
} else {
 echo "Error memperbaharui data: " . mysqli_error($conn);
}
 //$hasil = mysqli_query($conn, $input);
 
?>