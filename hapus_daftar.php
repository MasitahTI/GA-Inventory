<?php

include('config.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM produk WHERE id_produk = '$id'";
 
if($conn->query($query)) {
    header("location: data_daftar.php");
} else {
    echo "<script>alert('data gagal dihapus');
    document.location.href='data_daftar.php'</script>\n";
}

?>