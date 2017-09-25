<!DOCTYPE html>
<html>
<head>
 <!-- Bootstrap -->
 <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="asset/css/style.css">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
</head>
<body>
 <div class="row">
 <div class="span1"></div>
 <div class="span11">
 <center><h3>UPDATE USER</h3>

 <?php
 require_once 'connection.php';
 /*
 $sqlCount = "select count(username) from user";
 $query = mysqli_query($conn, $sqlCount) or
die(mysqli_error($conn));
 $rsCount = mysqli_fetch_array($query);
 $banyakData = $rsCount[0];
 */
 $id = $_GET['id'];
 $sql_limit = "select * from user where id=$id";
 $hasil = mysqli_query($conn, $sql_limit) or
die(mysqli_error($conn));

 $data=mysqli_fetch_array($hasil)
 ?>
</br>
<form action="updateUser2.php" method="post">
 <table width="450" border="0">
 <tr>
 <td >ID</td>
 <td><input name="id"
type="text" id="id" size="20" value="<?php echo $data['id']; ?>" readonly/></td>
<td style="font-size: 10px;">*ID tidak dapat diubah</td>
</tr>
 <tr>
 <td>Username</td>
 <td><input name="username"
type="text" id="username" size="20" value="<?php echo $data['username']; ?>" readonly/></td>
<td style="font-size: 10px;">*Username tidak dapat diubah</td>
 </tr>

 <tr>
 <td>Password</td>
 <td><input name="password" type="text" id="password" size="20" value="<?php echo $data['password']; ?>" /></td>
 </tr>
 <tr>
 <td>Level</td>
 <td>
 <select name='level'>
 <option value='user' <?php if($data['level'] == 'user') { echo "selected"; }?>>
 User</option>
 <option value='admin' <?php if($data['level'] == 'admin') { echo "selected"; }?>>
 Admin</option>
 </select>
 </td>
 </tr>
 </table>
 <br/>
 <table width border="0">
 <tr>
 <td width="92"><button class="btn btnwarning"
type="submit">Edit</a></button></td>
 <td width="92"><a href="index.php"
button class="btn btn-warning" type="button">Batal</a></button></td>
 </tr>
 </table>
 </center>
 </form>
 </center>
 </div>
 </div>
</body>
</html> 