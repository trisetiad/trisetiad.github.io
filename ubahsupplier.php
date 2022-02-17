<?php
        include ("koneksi.php");
        include ("seleksi_db.php");

$SQL="UPDATE supplier SET nama_supplier= '".$_GET['nama_supplier']."',alamat = '".$_GET['alamat']."',telp =
'".$_GET['telp']."',email= '".$_GET['email']."' WHERE kd_supplier ='".$_GET['kd_supplier']."';";

$cek = mysqli_query($koneksi, $SQL) or die ("Proses update data GAGAL! <br> ");
//echo $SQL;
?>

<script language="javascript">
alert("Data berhasil di edit !!");
document.location.href="supplier.php";
</script>