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
$input = "insert into user(username, password, level) values ('$username', '$password','$level')";
$sql_cek="SELECT * FROM user WHERE username='$username'";
$qry_cek=mysqli_query($conn, $sql_cek);
$jum_cek=mysqli_num_rows($qry_cek);

if ($username == "" or $password == ""){
	echo '<script type="text/javascript">
			var answer = alert("Data masih belum lengkap")
		window.location = "tambahUser.php";
		</script>';
		
}else if($jum_cek >= 1){
	echo "<script>window.alert('username yang anda masukkan sudah ada yang pakai')
			window.location='index.php'</script>";
}
else{
	$hasil = mysqli_query($conn, $input);
	header('location:index.php?update=2');
}
?>