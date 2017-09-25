<?php
 	$host = "localhost"; // Host name
 	$username = "root"; // Mysql username
 	$password = ""; // Mysql password
 	$db_name = "praktikum8"; // Database name
 	$conn = mysqli_connect($host, $username, $password, $db_name); 
 	// Check connection
 	if (!$conn){
 		die("Koneksi gagal : " . mysqli_connect_error());
 	}
 	$id = $_GET['id'];
 	$hapus = "Hapus dari user where id='$id'";
 	$query = mysqli_query($conn, $hapus) or die(mysql_error($conn)); 
 	//kembali ke halaman user.php 
 	header('location:index.php?update=3');
 	exit;
 ?>