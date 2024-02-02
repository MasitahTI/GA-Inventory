<?php

//include koneksi database
include('config.php');

//get data dari form
$id_penerima           = $_POST['id_penerima'];
$nama = $_POST['nama'];
$sn       = $_POST['sn'];
$jabatan       = $_POST['jabatan'];
$dapartemen       = $_POST['dapartemen'];
$site       = $_POST['site'];

//query insert data ke dalam database
$query = "INSERT INTO `penerima`(`id_penerima`, `nama`, `sn`, `jabatan`, `dapartemen`, `site`) VALUES ('$id_penerima','$nama','$sn','$jabatan','$dapartemen','$site')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($conn->query($query)) {

    //redirect ke halaman index.php 
    header("location: data_penerima.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>
