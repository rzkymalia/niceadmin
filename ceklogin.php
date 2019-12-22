<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['level']=="admin"){

		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location: ../admin/index.php");

	// cek jika user login sebagai chef
	}else if($data['level']=="chef"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "chef";
		// alihkan ke halaman dashboard chef
		header("location:../chef/index.php");
	// cek jika user login sebagai chef

	}else if($data['level']=="kasir"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "kasir";
		// alihkan ke halaman dashboard kasir
		header("location:../kasir/index.php");

	}elseif($data['level']=="meja"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "meja";
		// alihkan ke halaman waiter
		header ("location: ../index.php");

	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}

?>