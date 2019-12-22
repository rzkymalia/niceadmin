 <h2> Ini adalah halaman hapus produk</h2>

<?php 
$koneksi->query("DELETE FROM pemesanan_menu WHERE Id_pemesanan_menu='$_GET[id]'");

echo "<script> alert('menu terhapus'); </script>";
// print_r("<script>location='index.php?halaman=pemesanan';</script>");
echo "<script>location='index.php?halaman=pemesanan';</script>";
 ?>