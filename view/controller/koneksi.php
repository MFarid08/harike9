<?php
    $server = "localhost";
    $user = "root";
    $password ="";
    $nama_database ="latihan";

    $db = mysqli_connect($server, $user, $password, $nama_database);
    
    if (mysqli_connect_error()){
        echo "Koneksi database gagal:".mysqli_connect_error();
    }else{
        echo"Database Kembali Tersambung.";
    }
?>
    
    