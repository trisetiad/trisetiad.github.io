<?php 
session_start(); 
  if(!isset($_SESSION['login'])) { 
  include("home.php"); 
  }
  else {     
  ?> 

<html>
<head>               
<title>Data Supplier | Cake House</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<style type="text/css"></style> 
</head>

<body>
<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php">Cake House</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="index.php">Data Kue</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="supplier.php">Data Supplier</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="logout.php">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

<div class="jumbotron bg-dark text-white text-center">
    <div class="container">
    <h1 class="display-4">Welcome to Cake House</h1>
    <p class="lead">Menjual Berbagai Macam Kue Tradisional , Bolu , Kue Ulang Tahun dll</p>
    <p class="lead">Menerima Pesanan Kue Hubungi 089691426473</p>        
    <a class="btn btn-success btn-lg" href="https://api.whatsapp.com/send?phone=6289691426473" role="button">Order Now</a>
</div>
</div>

<div class="container text-center" >
<div class="card mt-3">

<div class="card-header bg-dark text-white">
Data Supplier Cake House</b>
</div>


        
<div class="card-body">
    <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand"></a>
    <form method="GET" action="supplier.php" class="form-inline" >
    <input class="form-control mr-sm-2" type="text"  name="kata_cari" id="kata_cari" placeholder="Cari Data Supplier" aria-label="Cari Data Kue" value="<?php
        if (isset($_GET['kata_cari'])){
            echo $_GET['kata_cari']; } ?>"/>
        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Cari</button>
        </form>

    <div id="container">
    <table class="table table-bordered table-striped text-center">
        <tr>
        <th>Kode Supplier</th>
        <th>Nama Supplier</th>
        <th>Alamat</th>
        <th>No Telpon</th>
        <th>Email</th>
        <th>Files</th>
        <th colspan="3">Aksi</th>
        </tr>
                

    <?php
        include ("koneksi.php");
        include ("seleksi_db.php");
        
        if (isset($_GET['kata_cari'])){
           $kata_cari =$_GET['kata_cari'];
           $seleksi = "SELECT * FROM supplier WHERE 
            id like '%".$kata_cari."%' OR nama_supplier like '%".$kata_cari."%' OR alamat like '%".$kata_cari."%' OR telp like '%".$kata_cari."%' OR email like '%".$kata_cari."%' ORDER BY id ASC";
                    
        }else{
            $seleksi = "SELECT * FROM supplier order by id desc";
             }
            $hasil_seleksi = mysqli_query ($koneksi , $seleksi);

            if (!$hasil_seleksi){
            echo "Proses penyeleksian Data Supplier gagal !!!";
            } else {
            while ($baris = mysqli_fetch_assoc ($hasil_seleksi)) {
            echo "<tr>
                <td>$baris[kd_supplier]</td>
                <td>$baris[nama_supplier]</td>
                <td>$baris[alamat]</td>
                <td>$baris[telp]</td>
                <td>$baris[email] </td>
                <td>$baris[files]</td>
                <td>
                <a class = 'btn btn-dark' href='formsupplier.php?action=edit&kd_supplier=$baris[kd_supplier]&
                                                             nama_supplier=$baris[nama_supplier]&
                                                             alamat=$baris[alamat]&
                                                             telp=$baris[telp]&
                                                             email=$baris[email]'>
                                                             Edit </a>
                </td>
                            
                <td>
                <a class = 'btn btn-danger' href='hapussupplier.php?&id=$baris[id]'> Hapus </a>
                </td>
                
                <td> 
                <a class = 'btn btn-info' href=\"donlot.php?files=$baris[files]\"> Download </a>
                </td>            
                </tr>";


 };
};
?>
</table>
<center><a class = 'btn btn-dark' href="formsupplier.php"> Tambah Data Supplier </a></center>
</div>
</div>
</div>
</div>

<script src="js/scriptsupplier.js"></script>
<script type="text/javascript" scr="js/bootstrap.min.js"></script> 

</body>
</html>                
<?php 
 } 
 ?> 