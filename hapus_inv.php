<?php

include('config.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM inv WHERE id_inv = '$id'";
 
if($conn->query($query)) {
    header("location: data_inv.php");
} else {
    echo "<script>alert('data gagal dihapus');
    document.location.href='data_inv.php'</script>\n";
}

?>