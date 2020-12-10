<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include_once("config.php");

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi,"select * from user_login where username='$username' and password='$password'");

$cek = mysqli_num_rows($login);

if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
	if($data['level']=="admin"){
		$_SESSION['username'] 	= $username;
		$_SESSION['level'] 		= "admin";
		$_SESSION['status'] 	= "login";
		header("location:admin/index.php");
	}
	else if($data['level']=="pegawai"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pegawai";
		$_SESSION['status'] 	= "login";
		header("location:pegawai/index.php");
	}
	else{
		header("location:index.php?pesan=gagal");
	}	
}
else{
	header("location:index.php?pesan=gagal");
}
?>