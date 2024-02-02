<?php

//include koneksi database
include('config.php');

//get data dari form
$id          = $_POST['id_diserahkan'];
$nama = $_POST['nama'];
$sn       = $_POST['sn'];
$jabatan       = $_POST['jabatan'];
$dapartemen       = $_POST['dapartemen'];
$site       = $_POST['site'];

//query update data ke dalam database berdasarkan ID

$query ="UPDATE diserahkan set nama = '$nama', sn = '$sn', jabatan = '$jabatan', dapartemen = '$dapartemen', site = '$site' WHERE id_diserahkan = '$id' ";
$result=mysqli_query($conn, $query);

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($result) {
    //redirect ke halaman index.php 
    header("location: data_diserahkan.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
    echo $conn->error;
}

?>
