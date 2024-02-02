<?php

//include koneksi database
include('config.php');

//get data dari form
$id           = $_POST['id_serahterima'];
$description = $_POST['description'];
$asset       = $_POST['asset'];
$qty       = $_POST['qty'];
$uom       = $_POST['uom'];
$remark       = $_POST['remark'];

//query update data ke dalam database berdasarkan ID

$query ="UPDATE serahterima set description = '$description', asset = '$asset', qty = '$qty', uom = '$uom', remark = '$remark' WHERE id_serahterima = '$id' ";
$result=mysqli_query($conn, $query);


//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($result) {
    //redirect ke halaman index.php 
    header("location: data_serahterima.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
    echo $conn->error;
}

?>
