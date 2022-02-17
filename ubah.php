<?php
        include ("koneksi.php");
        include ("seleksi_db.php");

$SQL="UPDATE kue SET nama= '".$_GET['nama']."',jenis = '".$_GET['jenis']."',stok =
'".$_GET['stok']."',harga= '".$_GET['harga']."' WHERE kode ='".$_GET['kode']."';";

$cek = mysqli_query($koneksi, $SQL) or die ("Proses update data GAGAL! <br> ");
//echo $SQL;
?>

<script language="javascript">
alert("Data berhasil di edit !!");
document.location.href="index.php";
</script>