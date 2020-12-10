<?php
	include_once("../config.php");
	$id = $_GET['id'];

	$hasil = mysqli_query($koneksi, "DELETE FROM user WHERE id=$id");
	header("Location:index.php");
?>