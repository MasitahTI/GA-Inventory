<?php

//include koneksi database
include('config.php');

//get data dari form
$id          = $_POST['id_ht'];
$tgl_masuk = $_POST['tgl_masuk'];
$tgl_keluar = $_POST['tgl_keluar'];
$description       = $_POST['description'];
$asset       = $_POST['asset'];
$qty       = $_POST['qty'];
$sn       = $_POST['sn'];
$dapartemen       = $_POST['dapartemen'];
$remark       = $_POST['remark'];

//query update data ke dalam database berdasarkan ID

$query ="UPDATE ht set tgl_masuk = '$tgl_masuk', tgl_keluar = '$tgl_keluar', description = '$description', asset = '$asset', qty = '$qty', sn = '$sn', dapartemen = '$dapartemen', remark = '$remark' WHERE id_ht = '$id' ";
$result=mysqli_query($conn, $query);

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($result) {
    //redirect ke halaman index.php 
    header("location: data_aset.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
    echo $conn->error;
}

?>
