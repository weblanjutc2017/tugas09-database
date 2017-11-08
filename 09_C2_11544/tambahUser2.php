<?php
require_once 'koneksi.php';


$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
$input = "insert into user(username, password, level) values ('$username', '$password','$level')";

$cek_username=mysqli_query($conn, "select * from user where username='$username'");
// Kalau username sudah ada yang pakai
if (mysqli_num_rows($cek_username) > 0){
  echo '<script type="text/javascript">
	var answer = alert("Username sudah terpakai. Ulangi lagi")
	window.location = "tambahUser.php";
	</script>';
}
else if ($username == "" or $password == ""){
	echo '<script type="text/javascript">
	var answer = alert("Data masih belum lengkap")
	window.location = "tambahUser.php";
	</script>';
}else{
	$hasil = mysqli_query($conn, $input);
	header('location:index.php?update=2');
}
?>