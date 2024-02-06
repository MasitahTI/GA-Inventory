<?php

include('config.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM serahterima WHERE id_serahterima = '$id'";

if($conn->query($query)) {
    header("location: data_serahterima.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>
