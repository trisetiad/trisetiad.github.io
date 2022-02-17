<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $koneksi = mysqli_connect($host, $user , $pass , "finalweb");
    
    if(!$koneksi){
        echo "koneksi ke database gagal ! ";
    };
?>