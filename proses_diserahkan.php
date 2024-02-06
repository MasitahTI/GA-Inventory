<?php

//include koneksi database
include('config.php');

//get data dari form
$id_diserahkan           = $_POST['id_diserahkan'];
$nama = $_POST['nama'];
$sn       = $_POST['sn'];
$jabatan       = $_POST['jabatan'];
$dapartemen       = $_POST['dapartemen'];
$site       = $_POST['site'];

//query insert data ke dalam database
$query = "INSERT INTO `diserahkan`(`id_diserahkan`, `nama`, `sn`, `jabatan`, `dapartemen`, `site`) VALUES ('$id_diserahkan','$nama','$sn','$jabatan','$dapartemen','$site')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($conn->query($query)) {

    //redirect ke halaman index.php 
    header("location: data_diserahkan.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>
