<?php

include "koneksi.php";

$id=$_POST['id_pelanggan'];
$nama_pelanggan=$_POST['nama_pelanggan'];
$jenis_barang=$_POST['jenis_barang'];
$jumlah_barang=$_POST['jumlah_barang'];
$total_harga=$_POST['total_harga'];

$ubah=$koneksi->query("update data_pelanggan set id_pelanggan='$id', nama_pelanggan='$nama_pelanggan', jenis_barang='$jenis_barang', jumlah_barang='$jumlah_barang', total_harga='$total_harga' where id_pelanggan='$id'");

if($ubah==true){

    header("location:tampil-pelanggan.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>