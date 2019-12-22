 <h2> Ini adalah halaman hapus produk</h2>

<?php 
$ambil = $koneksi->query("SELECT  * FROM menu WHERE id_menu='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$foto_menu = $pecah['foto_menu'];
if (file_exists("../foto_menu/$foto_menu"))
{
	unlink ("../foto_menu/$foto_menu");
}
$koneksi->query("DELETE FROM menu WHERE id_menu='$_GET[id]'");

echo "<script> alert('menu terhapus'); </script>";
echo "<script>location='index.php?halaman=menu';</script>";
 ?>