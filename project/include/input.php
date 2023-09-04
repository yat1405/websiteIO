<?php 

include 'koneksi.php';

    $partnumber = $_POST['partnumber'];
    $qtyin = $_POST['qtyin'];
    
    mysqli_query($koneksi,"INSERT INTO `inputqty` (`partnumber`, `qtyin`) VALUES ('$partnumber','$qtyin')");

    header("Location: ../main.php"); 
?>