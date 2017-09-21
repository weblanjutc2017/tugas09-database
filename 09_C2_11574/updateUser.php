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
		<?php 
			
			$id=$_GET['id']; //untuk mendapatkan id user
			
		?>
		<div class="container">
			<div class="row">
				<div class="span2"></div>
				<div class="span8">
				<center><h3>UPDATE DATA USER</h3>
				
				<?php if (!empty($_GET['update'])){
					if ($_GET['update']==1)
					echo "<p class='message'><center><h4>Silahkan tulis password baru</h4></center></p>";
				
					else if ($_GET['update']==2)
					echo "<p class='message'><center><h4>Password tidak boleh kosong</h4></center></p>";
				
					else if ($_GET['update']==3)
					echo "<p class='message'><center><h4>Password harus berbeda dari sebelumnya</h4></center></p>";
				}?>
				
					<form action="updateUser2.php?id=<?php echo $id ?>" method="post">
						<table width="319" border="0">
							<tr>
								<td>Password</td>
								<td><input name="password" type="text" id="password" size="20" /></td>
							</tr>
							<tr>
								<td>Level</td>
								<td>
								<select name='level'>
									<option value='user'>User</option>
									<option value='admin'>Admin</option>
								</select>
								</td>
							</tr>	
						</table>
						
						<br/>
					
						<table width border="0">
							<tr>
								<!-- dibutton ini untuk meneruskan id yang kita peroleh dari index untuk diteruskan ke updateUser.php-->
								<td width="92"><button class="btn btnwarning" type="submit" name="id" value=<?php echo $id ?>>Simpan</a></button></td>
								<td width="92"><a href="index.php" button class="btn btn-warning" type="button">Batal</a></button></td>
							</tr>
						</table>
					</center>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>