<?php
    include ("koneksi.php");
    $database = "finalweb" ;

    $selek_db = mysqli_select_db ($koneksi , $database);
    
    if (!$selek_db){
        die ("Database tidak terseleksi");
    }
?>
