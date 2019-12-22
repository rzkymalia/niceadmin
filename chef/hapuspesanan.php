<?php 


$koneksi->query("DELETE FROM pemesanan_menu WHERE id_pemesanan_menu='$_GET[id]'");

echo "<script> alert('pesanan terhapus'); </script>";
echo "<script>location='index.php?halaman=pemesanan';</script>";
 ?>