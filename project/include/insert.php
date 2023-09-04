<?php 

include 'koneksi.php';

    $name = $_POST['name'];
    $partnumber = $_POST['partnumber'];
    $maker = $_POST['maker'];
    $location = $_POST['location'];
    $balance = $_POST['in'];
    $out = 0;
    $in = $_POST['in'];
    $processname = $_POST['processname'];

    mysqli_query($koneksi,"INSERT INTO `inventory`(`name`, `processname`, `partnumber`, 
    `maker`, `input`,`output`, `balance`, `location`) VALUES ('$name','$processname','$partnumber','$maker',
    '$in','$out','$balance','$location')");

    header("Location:/.. main.php"); 
?>