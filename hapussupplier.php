<?php
    include ("koneksi.php");
    include ("seleksi_db.php");
        
    $SQL="DELETE FROM supplier WHERE id='".$_GET['id']."';";

    $cek = mysqli_query($koneksi , $SQL ) or die ("Proses Hapus data GAGAL! <br> ");
    ?>


        <script language="javascript">
        alert("Data berhasil di hapus !!");
        document.location.href="supplier.php";
        </script>