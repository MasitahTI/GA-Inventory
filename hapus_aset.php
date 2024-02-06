<?php

include('config.php');

// //get id
// $id = $_GET['id'];

// $query = "DELETE FROM ht WHERE id_ht = '$id'";
 
// if($conn->query($query)) {
//     echo "<script>alert('data berhasil dihapus');
//     document.location.href='data_aset.php'</script";
//     // header("location: data_aset.php");
// } else {
//     echo "<script>alert('data gagal dihapus');
//     document.location.href='data_aset.php'</script>\n";
// }

$id = $_GET['id'];

//gunakan fungsi di bawah ini agar session bisa dibuat
session_start();

//koneksi ke database latihan

//hapus data dari tabel kontak
$delete = mysqli_query($conn, "DELETE FROM ht WHERE id_ht = '$id'");

//set session sukses
$_SESSION["sukses"] = 'Data Berhasil Dihapus';

//redirect ke halaman index.php
header('Location: data_aset.php'); 
?>
