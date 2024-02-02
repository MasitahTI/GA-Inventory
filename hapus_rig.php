<?php

include('config.php');

$id = $_GET['id'];

//gunakan fungsi di bawah ini agar session bisa dibuat
session_start();

//koneksi ke database latihan

//hapus data dari tabel kontak
$delete = mysqli_query($conn, "DELETE FROM rig WHERE id_rig = '$id'");

//set session sukses
$_SESSION["sukses"] = 'Data Berhasil Dihapus';

//redirect ke halaman index.php
header('Location: data_rig.php'); 
?>