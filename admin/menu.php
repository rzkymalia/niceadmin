
<html>
	<head>
		<title> Menu </title>
		<link rel="stylesheet" href="style.css">
		<style>
			h2{
				color : #8B4513;
			}
		</style>
	</head>
	<body>
<!-- 		<div class="container">
 -->
<h2>Data Menu</h2>
<table class="table table-bordered" border="4">
	<thead>
		<tr>
			<th> No</th>
			<th> Nama</th>
			<th> Harga</th>
			<th> Foto</th>
			<th> Deskripsi</th>
			<th> Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi -> query("SELECT * FROM menu"); ?>
		<?php while ($pecah = $ambil-> fetch_assoc()){ ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah ['nama_menu']; ?></td>
				<td>Rp.<?php echo number_format($pecah ['harga_menu']) ; ?></td>
				<td>
					<img src="../foto_menu/<?php echo $pecah ['foto_menu']; ?>" width="100px" alt="">
				</td>
				<td><?php echo $pecah ['deskripsi_menu']; ?></td>
				<td> <center>
					<a href="index.php?halaman=hapusmenu&id=<?php echo $pecah ['id_menu']; ?>" class="btn btn-danger">hapus</a>
					<a href="index.php?halaman=ubahmenu&id=<?php echo $pecah ['id_menu']; ?>" class="btn btn-primary">ubah</a>
				</center>
				</td>
				<?php $nomor++; ?>
			<?php } ?>
		</tr>
	</tbody>
</table>

<a href="index.php?halaman=tambahmenu" class="btn btn-primary">Tambah Data</a>


</div>
</body>
</html>