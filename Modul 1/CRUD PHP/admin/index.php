<?php 
	include_once("../config.php");
	$hasil = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
	<title>HALAMAN ADMIN</title>
</head>
<body>
	<?php 
		session_start();
		if($_SESSION['status']!="login"){
			header("location:../index.php?pesan=belum_login");
		}
	?>

	<h4>Selamat datang <?php echo $_SESSION['username']; ?></h4>
	<a href="tambah.php">+Tambah data</a><br/><br/>
    
    <table width='80%' border=1>
    	<tr>
        	<th>Nim</th> <th>Nama</th> <th>Alamat</th> <th>Opsi</th>
    	</tr>

    	<?php  
    		while($user_data = mysqli_fetch_array($hasil)){         
        		echo "<tr>";
        		echo "<td>".$user_data['nim']."</td>";
        		echo "<td>".$user_data['nama']."</td>";
        		echo "<td>".$user_data['alamat']."</td>";    
        		echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    		}
    	?>
    </table>

	<br/>
	<br/>
	<a href="logout.php">Logout</a>
</body>
</html>