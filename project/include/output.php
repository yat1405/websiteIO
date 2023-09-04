<?php 

include 'koneksi.php';

    $partnumber = $_POST['partnumber'];
    $qtyout = $_POST['qtyout'];
    
    mysqli_query($koneksi,"INSERT INTO `outputqty`(`partnumber`, `qtyout`) VALUES ('$partnumber','$qtyout')");

    header("Location: ../main.php"); 
?>