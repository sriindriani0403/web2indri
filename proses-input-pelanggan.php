<?php

$id=$_POST['id_pelanggan'];
$nama_pelanggan=$_POST['nama_pelanggan'];
$jenis_barang=$_POST['jenis_barang'];
$jumlah_barang=$_POST['jumlah_barang'];
$total_harga=$_POST['total_harga'];

include "koneksi.php";

$simpan=$koneksi->query("insert into data_pelanggan(id_pelanggan,nama_pelanggan,jenis_barang,jumlah_barang,total_harga) 
                        values ('$pesanan_id', '$nama_pelanggan', '$jenis_barang', '$jumlah_barang', '$total_harga')");

if($simpan==true){

    header("location:tampil-pelanggan.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>