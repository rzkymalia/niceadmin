<h2> Ini adalah halaman ubah menu</h2>

<?php 

$ambil = $koneksi->query("SELECT * FROM menu WHERE id_menu='$_GET[id]'");
$pecah= $ambil-> fetch_assoc();

?>


<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label > Nama Menu</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama_menu'];?>">

	</div>
	<div class="form-group">
		<label > Harga Menu</label>
		<input type="text" name="harga" class="form-control" value="<?php echo $pecah['harga_menu'];?>">

	</div>
	<div class="form-group">
		<img src="../foto_menu/<?php echo $pecah['foto_menu']?>" width="200px">
	</div>
	<div class="form-group">
		<label> Ganti foto</label>
		<input type="file" name="foto" class="form-control">
	</div>
	<div class="form-group">
		<label> Deskripsi</label>
		<textarea name="deskripsi" class="form-control" rows="10">
			
		<?php echo $pecah['deskripsi_menu']; ?>
		</textarea>
	</div>
	<button class="btn btn-primary" name="ubah"> Ubah</button>
</form>

<?php 
if (isset($_POST['ubah']))
{
	$nama_foto = $_FILES ['foto']['name'];
	$lokasifoto = $_FILES['foto'] ['tmp_name'];
	// jk foto dirubah
	if (!empty($lokasifoto))
	{
		move_uploaded_file($lokasifoto, "../foto_menu/$nama_foto");

		$koneksi->query("UPDATE menu SET nama_menu='$_POST[nama]',
			harga_menu='$_POST[harga]', foto_menu ='$nama_foto', deskripsi_menu='$_POST[deskripsi]' 
			WHERE id_menu='$_GET[id]'");
	}
	else 
	{
		$koneksi->query("UPDATE menu SET nama_menu='$_POST[nama]',
			harga_menu='$_POST[harga]', deskripsi_menu='$_POST[deskripsi]' 
			WHERE id_menu='$_GET[id]'");
	}
	echo "<script> alert ('Data produk telah diubah');</script>";
	echo "<script> location='index.php?halaman=menu';</script>";
}

 ?>