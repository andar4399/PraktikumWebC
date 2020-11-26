<?php
	#ambil inputan
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$tugas = $_POST['tugas'];
	$uts = $_POST['uts'];
	$uas = $_POST['uas'];
 
	//menghitung nilai akhir
	$nilai_akhir = $tugas + $uts + $uas;
	$akhir = $nilai_akhir/3;

	//menampilkan grade
	if ($akhir>=80){
		$grade = "A";
	}
	elseif ($akhir>=70){
		$grade = "B";
	}
	elseif($akhir>=60){
		$grade = "C";
	}
	else
		$grade = "E";

	echo "

	<h1>Nilai Akhir Mahasiswa</h1>

	Nama : $nama <br>

	NIM : $nim <br>

	Nilai Tugas : <b>$tugas</b><br>

	Nilai UTS   : <b>$uts</b><br>

	Nilai UAS   : <b>$uas</b><br>

	Nilai Akhir : <b>$akhir</b><br>

	Anda Dinyatakan Lulus Dengan Predikat $grade   
	";

?>