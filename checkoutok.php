<?php 
session_start();
$koneksi = new mysqli ("localhost", "root", "", "menufix");

//Page untuk insert data pemesanan


        $noMeja =  $_SESSION ["meja"] ['no_meja'];
        date_default_timezone_set('ASIA/JAKARTA');
        
        $md = date("Gi");
        $tbh = date("jn");
        $tanggalSkrg = date("Y-m-d");

        $unique_id = $noMeja . $tbh . $md ; //generate no order 
        



        $koneksi->query("INSERT INTO pemesanan (id_pemesanan, id_meja, nama, tanggal_pemesanan, total_pemesanan, status_pemesanan) VALUES ('".$unique_id."','".$noMeja."','','".$tanggalSkrg."',1,'Disiapkan')");
                    
        $nomor= 1; 
        $totalbelanja = 0; 
        foreach ($_SESSION["keranjang"] as $id_menu => $jumlah): 

            $ambil=$koneksi->query("SELECT * FROM menu WHERE id_menu='".$id_menu."'");
            $pecah=$ambil->fetch_assoc();
            $subharga = $pecah["harga_menu"] * $jumlah;
 
                $namaMenu = $pecah ["nama_menu"]; 
                $hargaMenu = $pecah ["harga_menu"]; 
                $totalbelanja+=$subharga;
                

            $koneksi->query("INSERT INTO  pemesanan_menu ( Id_pemesanan_menu ,  id_pemesanan ,  id_menu ,  tanggal_pemesanan ,  nama_menu ,  harga ,  jumlah ,  subharga ,  no_meja ,  total_pemesanan ) VALUES ('','".$unique_id."','".$id_menu."','".$tanggalSkrg."','".$namaMenu."','".$hargaMenu."','".$jumlah."','".$subharga."','".$noMeja."',' ".$totalbelanja."')");
            
        endforeach;
    
        $_SESSION['orderNumber'] = $unique_id;      //simpan no order pada sesi orderNumber
        $_SESSION['totalOrder'] = $totalbelanja;    //simpan total belanja pada sesi totalOrder
        header('Location: nota.php');    //redirect ke checkout sukses


    ?>

        



        </body>
        </html>
