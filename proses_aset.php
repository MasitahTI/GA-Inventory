<?php

//include koneksi database
include('config.php');

//get data dari form
$tgl_masuk = $_POST['tgl_masuk'];
$description       = $_POST['description'];
$asset       = $_POST['asset'];
$qty       = $_POST['qty'];
$sn       = $_POST['sn'];
$dapartemen       = $_POST['dapartemen'];
$remark       = $_POST['remark'];

//query insert data ke dalam database
$sql = "INSERT INTO `ht` (`id_ht`, `tgl_masuk`, `tgl_keluar`, `description`, `asset`, `qty`, `sn`, `dapartemen`, `remark`) VALUES (NULL, '$tgl_masuk', ' ', '$description', '$asset', '$qty', '$sn', '$dapartemen', '$remark');";
//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($conn->query($sql)) {

    //redirect ke halaman index.php 
    header("location: data_aset.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";
    echo $conn->error;

}

?>
