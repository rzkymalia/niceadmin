<h2> Tambah Menu</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label> Nama</label>
        <input type="text" class="form-control" name="nama">
    </div>
        <div class="form-group">
            <label> Harga (Rp)</label>
            <input type="text" class="form-control" name="harga">
        </div>
        <div class="form-group">
            <label>Foto</label>
            <input type="file" class="form-control" name="foto">
        </div>
        <div class="select">
        <label> Kategori</label>
            <select class="form-control" name="kategori">
                <option value="0">Pilih kategori</option>
                <option value="1"> Makanan</option>
                <option value="2">Minuman</option>
                <option value="3"> Snack</option>
                <option value="4"> Dessert</option>
            </select>
        </div>
        <div class="form-group">
            <label> Deskripsi</label>
            <textarea class= "form-control" name="deskripsi" id="" cols="30" rows="10"></textarea>
        </div>
        <button class="btn btn-primary" name="save">simpan</button>
    </form>

    <?php 
    if (isset($_POST['save']))
    {
        $nama = $_FILES['foto'] ['name'];
        $lokasi = $_FILES['foto'] ['tmp_name'];
        move_uploaded_file($lokasi, "../foto_menu/".$nama);
        $koneksi->query("INSERT INTO menu
            (nama_menu, harga_menu, foto_menu, id_kategori, deskripsi_menu)
            VALUES('$_POST[nama]', '$_POST[harga]', '$nama', '$_POST[kategori]', '$_POST[deskripsi]')");

        echo  " <div class='alert alert-info'> Menu Berhasil ditambahkan </div>";
        //if ($_POST['kategori'] === 1) {
        //  echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=menu'>";
        //}
        //else if ($_POST['kategori'] === 2) {
        //  echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=menu'>";
        //}
        echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=menu'>";
    }

    ?>