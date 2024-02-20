<?php 
// koneksi database
include 'koneksi.php';
// menangkap data yang di kirim dari form
$Username = $_POST['Username'];
$Password = md5($_POST['password']);
$Email = $_POST['Email'];
$NamaLengkap = $_POST['NamaLengkap'];
$Alamat = $_POST['Alamat'];
$Level = $_POST['Level'];
// menginput data ke database
$result = mysqli_query($koneksi,"insert into user (Username,password,Email,NamaLengkap,Alamat,Level) values('$Username','$Password','$Email','$NamaLengkap','$Alamat','$Level')");
// mengalihkan halaman kembali ke index.php
header("location:index.php");
?>