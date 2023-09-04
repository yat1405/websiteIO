<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "sparepart";
    $koneksi = mysqli_connect("$host","$user","$pass","$db");

    if (!$koneksi){
      die("Database gagal Terhubung");
    }

      ?>
