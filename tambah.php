<?php

    include ("koneksi.php");
    include ("seleksi_db.php");

    $lokasi_file = $_FILES['files']['tmp_name']; 
	$nama_file   = $_FILES['files']['name']; 
 
	// Tentukan folder untuk menyimpan file 
	$folder = "files/$nama_file"; 
	 
	// tanggal sekarang 
	$tgl_upload = date("Ymd"); 
	 
	// Apabila file berhasil di upload 
	if (move_uploaded_file($lokasi_file,"$folder")){   echo "Nama File : <b>$nama_file</b> sukses di upload"; 
	   
	  // Masukkan informasi file ke database 
	  $konek = mysqli_connect("localhost","root","","finalweb"); 

$SQL="INSERT INTO kue
    (kode , nama , jenis , stok , harga , files)
    VALUES
    ( '".$_POST['kode']."','".$_POST['nama']."', '".$_POST['jenis']."', '".$_POST['stok']."', '".$_POST['harga']."' ,'".$nama_file."');";

$cek = mysqli_query($koneksi , $SQL) or die ("Proses Penambahan data GAGAL! <br> ");
} 
else{   echo "File gagal di upload"; 
} 
?>

<script language="javascript">
alert("Data Berhasil Ditambahkan !!");
document.location.href="index.php";
</script>