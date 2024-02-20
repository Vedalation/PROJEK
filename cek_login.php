<?php
include "koneksi.php";
session_start();
if(isset($_POST['username'])){
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$level = $_POST['Level'];

	$sql = "SELECT * FROM user WHERE `username`='$username' AND `password`='$password' AND `level`='$level' ";
	$result = mysqli_query($koneksi,$sql);
	if(mysqli_num_rows($result) > 0){
		// Jika Data Tersedia Maka Jalankan Code di bawah ini \/
		$row = mysqli_fetch_assoc($result);
		$id = $row['UserID'];
		$username = $row['Username'];
		$namaLengkap = $row['NamaLengkap'];
		if($username == $username && $password == $row['password']){
			$_SESSION['id'] = $id;
			$_SESSION['username'] = $username;
			$_SESSION['level'] = $row['Level'];
			$_SESSION['logged-in'] = true;
			if ($level == 'anggota'){
				header('location:dashboard.php');
			}
			elseif ($level == 'petugas'){
				header('location:petugas/dashboard2.php');
			}
			if ($level == 'admin'){
				header('location:admin/index.php');
			}
		}
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}
}
?>