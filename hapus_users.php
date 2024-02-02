<?php

include('config.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM users WHERE username = '$id'";
 
if($conn->query($query)) {
    header("location: users.php");
} else {
    echo "<script>alert('data gagal dihapus');
    document.location.href='users.php'</script>\n";
}

?>