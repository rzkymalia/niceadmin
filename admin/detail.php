<h2>Detail Pembelian</h2>

<?php 
$ambil = $koneksi-> query("SELECT * FROM pembelian JOIN meja ON pembelian.id_pembelian = meja.id_meja WHERE pembelian.id_pembelian='$_GET[id]'");
$detail = $ambil->fetch_assoc();
 ?>

 <pre> <?php print_r($detail); ?></pre>