<?php 
 
$server = "localhost";
$user = "root";
$pass = "";
$database = "db_ujicoba";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>