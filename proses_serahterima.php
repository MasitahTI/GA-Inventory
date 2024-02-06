<?php

//include koneksi database
include('config.php');

//get data dari form
$id_serahterima           = $_POST['id_serahterima'];
$description = $_POST['description'];
$asset       = $_POST['asset'];
$qty       = $_POST['qty'];
$uom       = $_POST['uom'];
$remark       = $_POST['remark'];

//query insert data ke dalam database
$query = "INSERT INTO `serahterima`(`id_serahterima`, `description`, `asset`, `qty`, `uom`, `remark`) VALUES ('$id_serahterima','$description','$asset','$qty','$uom','$remark')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($conn->query($query)) {

    //redirect ke halaman index.php 
    header("location: data_serahterima.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>
