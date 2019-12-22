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
        <th>No Order</th>
        <th>Tanggal</th>
        <th>No Meja</th>
        <th>Aksi</th>



      </tr>
      <tbody>
        <?php $nomor=1; ?>
        <?php  date_default_timezone_set('Asia/Jakarta');
        $tanggal_pemesanan = date('d-m-Y H:i:s'); ?>    
        <?php $ambil=$koneksi->query("SELECT * FROM pemesanan INNER JOIN meja group by no_meja"); ?>
        <?php while ($pecah = $ambil->fetch_assoc()){

         ?>
         <tr>
          <td><?php echo $nomor; ?></td>
          <td> <?php echo $pecah['id_pemesanan']; ?></td>
          <td> <?php echo $pecah ['tanggal_pemesanan']; ?></td>
          <td><button class="btn btn-primary"><a href="index.php?halaman=detail"><font color="white"><?php echo $pecah ['no_meja']; ?> </font></a></button></td>
          <td><a href="index.php?halaman=hapusdetail&id=<?php echo $pecah ['id_pemesanan']; ?>"><button class="btn btn-danger">Hapus</button></a></td>        </tr>
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