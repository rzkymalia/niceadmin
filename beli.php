<?php 
session_start();

//mendapatkan id_menu dari url
$id_menu = $_GET['id'];

// jika sudah ada produk itu dikeranjang, maka produk itu jumlahnya + 1

if(isset($_SESSION['keranjang'][$id_menu]))
{
	$_SESSION['keranjang'][$id_menu] += 1;
}

//selain itu berati blum ada dikeranjang, maka produk itu dianggap dibeli 1
else 
{
	$_SESSION['keranjang'][$id_menu]=1;
}


// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

//larikan ke halaman keranjang

echo "<script> alert ('Menu berhasil dimasukkan ke keranjang belanja'); </script>";
echo "<script> location='keranjang.php'; </script>";

 ?> 