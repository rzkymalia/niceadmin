<!DOCTYPE html>
<html>
<head>
	<title>detail</title>
</head>
<body>

	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>No Order</th>
				<th>Nama Menu</th>
				<th>Jumlah</th>
			</tr>
		</thead>
		<tbody>

			<?php $nomor=1; ?>
			
			<?php  date_default_timezone_set('Asia/Jakarta');
			$tanggal_pemesanan = date('d-m-Y H:i:s'); ?>    
			<?php $ambil=$koneksi->query("SELECT * FROM pemesanan_menu  JOIN pemesanan id_pemesanan ='$_GET[id]'"); ?>
			<?php while ($pecah = $ambil->fetch_assoc()){

				?>
				<tr>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $pecah ['id_pemesanan']; ?></td>
					<td><?php echo $pecah['nama_menu']; ?></td>
					<td><?php echo $pecah['jumlah']; ?></td>
				</tr>
				          <?php $nomor++; ?>
				      <?php } ?>

			</tbody>
		</table>

	</body>
	</html>