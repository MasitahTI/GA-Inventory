<?php

//include koneksi database
include('config.php');

//get data dari form
$id          = $_POST['id_produk'];
$tgl_masuk = $_POST['tgl_masuk'];
$tgl_keluar = $_POST['tgl_keluar'];
$nama_barang       = $_POST['nama_barang'];
$user       = $_POST['user'];
$sn       = $_POST['sn'];
$dept       = $_POST['dept'];
$asset       = $_POST['asset'];
$kerusakan       = $_POST['kerusakan'];
$keterangan       = $_POST['keterangan'];

//query update data ke dalam database berdasarkan ID

$query ="UPDATE produk set tgl_masuk = '$tgl_masuk', tgl_keluar = '$tgl_keluar', nama_barang = '$nama_barang', user = '$user', sn = '$sn', sn = '$sn', dept = '$dept', asset = '$asset', kerusakan = '$kerusakan', part = ' ', keterangan = '$keterangan' WHERE id_produk = '$id' ";
$result=mysqli_query($conn, $query);

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($result) {
    //redirect ke halaman index.php 
    header("location: data_daftar.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
    echo $conn->error;
}

?>
