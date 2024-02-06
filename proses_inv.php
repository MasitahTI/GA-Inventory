<?php

//include koneksi database
include('config.php');

//get data dari form
$tgl_masuk = $_POST['tgl_masuk'];
$nama_barang       = $_POST['nama_barang'];
$user       = $_POST['user'];
$sn       = $_POST['sn'];
$dept       = $_POST['dept'];
$asset       = $_POST['asset'];
$kerusakan       = $_POST['kerusakan'];
$keterangan       = $_POST['keterangan'];

//query insert data ke dalam database
$sql = "INSERT INTO `inv` (`id_inv`, `tgl_masuk`, `tgl_keluar`, `nama_barang`, `user`, `sn`, `dept`, `asset`, `kerusakan`, `part`, `keterangan`) VALUES (NULL, '$tgl_masuk', ' ', '$nama_barang', '$user', '$sn', '$dept', '$asset', '$kerusakan', ' ', '$keterangan');";
//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($conn->query($sql)) {

    //redirect ke halaman index.php 
    header("location: data_inv.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
    echo $conn->error;

}

?>
