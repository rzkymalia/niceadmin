<?php 


$koneksi->query("DELETE FROM pemesanan WHERE id_pemesanan='$_GET[id]'");

echo "<script> alert('pesanan terhapus'); </script>";
echo "<script>location='index.php?halaman=pemesanan';</script>";
 ?>