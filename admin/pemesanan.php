<html>
<head>
  <title> Pemesanan </title>
<!--    <meta http-equiv="refresh" content="5">
 --></head>
<body>

<h2> Data Pemesanan</h2>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Tanggal</th>
      <th>Nama Menu</th>
      <th>Harga</th>
      <th>Jumlah</th>
      <th>No Meja</th>
      <th>Status</th>
      <th>Aksi</th>

    </tr>
    <tbody>
      <?php $nomor=1; ?>
      <?php  date_default_timezone_set('Asia/Jakarta');
      $tanggal_pemesanan = date('d-m-Y H:i:s'); ?>    
      <?php $ambil=$koneksi->query("SELECT * FROM pemesanan_menu"); ?>
      <?php while ($pecah = $ambil->fetch_assoc()){

       ?>
        <tr>
          <td><?php echo $nomor; ?></td>
          <td> <?php echo $tanggal_pemesanan; ?></td>
          <td> <?php echo $pecah['nama_menu']; ?></td>
          <td>Rp.<?php echo number_format($pecah['harga']); ?></td>
          <td><?php echo $pecah['jumlah']; ?></td>
          <td><?php echo $pecah['no_meja']; ?></td>
          <td><a href="http://localhost/menucoba/chef/index.php?halaman=pemesanan&update=<?php echo $pecah ['Id_pemesanan_menu']; ?>"><button class="btn btn-<?php if ($pecah['status_pemesanan']=='Disiapkan') {echo 'btn btn-warning';} else {echo 'btn btn-primary';} ?>"><?php echo $pecah['status_pemesanan']; ?></button></a></td>

          <td><a href="index.php?halaman=hapuspesanan&id=<?php echo $pecah ['Id_pemesanan_menu']; ?>"><button class="btn btn-danger">Hapus</button></a></td>


        </tr>
        <?php $nomor++; ?>
      <?php } ?>
    </tbody>  
  </thead>
</table>

</body>
</html>

<?php 
if (isset($_GET['update'])) {
  $koneksi->query("update pemesanan_menu  set status_pemesanan = 'Selesai' WHERE Id_pemesanan_menu='$_GET[update]'");

echo "<script> alert('pesanan Selesai'); </script>";
echo "<script>location='index.php?halaman=pemesanan';</script>";
}
?>