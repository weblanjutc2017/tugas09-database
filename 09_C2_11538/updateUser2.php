<?php $id=$_GET['id'];
?>
<?php
	$no=1;
	$host = "localhost"; // Host name
	$username = "root"; // Mysql username
	$password = ""; // Mysql password
	$db_name = "praktikum8"; // Database name
	$conn = mysqli_connect($host, $username, $password, $db_name);

	// melakukan pengecekan koneksi
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
 
    //menangkap parameter yang dikirimkan dari detail.php
    $username = $_POST['username'];
	$password = $_POST['password'];
	$level = $_POST['level'];
	$que="select * from user where username='$username'";
	$row=mysqli_query ($conn, $que);
 
    //perintah untuk melakukan update
    //melakukan update data berdasarkan ID
    $sql = "UPDATE user SET username = '$username', password = '$password', level = '$level' WHERE no=$id";
 
    if ($conn->query($sql) === TRUE) {
        //jika  berhasil tampil ini
        echo "Data Berhasil Diubah"."</br>";
        echo "<a href='index.php'>Kembali Ke Halaman Depan</a>";
    } else {
        // jika gagal tampil ini
        echo "Gagal Melakukan Perubahan: " . $conn->error;
    }
    $conn->close();
?>