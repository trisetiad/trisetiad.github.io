<?php 
session_start(); 
  if(!isset($_SESSION['login'])) { 
  include("home.php"); 
  }
  else {     
  ?> 

<html>
<head>               
<title>Cake House</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
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

<div class=container>
<div class="card mt-3">
<center>
<div class="card-header bg-dark text-white">
Data Stock Kue
</div>
</center>


        
<div class="card-body">
    <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand"></a>
    <form method="GET" action="index.php" class="form-inline" >
    <input class="form-control mr-sm-2" type="text"  name="kata_cari" id="kata_cari" placeholder="Cari Data Kue" aria-label="Cari Data Kue" value="<?php
        if (isset($_GET['kata_cari'])){
            echo $_GET['kata_cari']; } ?>"/>
        <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Cari Data</button>
        </form>

    <div id="container">
    <table class="table table-bordered table-striped text-center">
        <tr>
        <th>Kode</th>
        <th>Nama Produk</th>
        <th>Jenis Kue</th>
        <th>Jumlah Stock</th>
        <th>Harga</th>
        <th>Files</th>
        <th colspan="3">Aksi</th>
        </tr>
                

<?php
    include ("koneksi.php");
    include ("seleksi_db.php");
        
    if (isset($_GET['kata_cari'])){
    $kata_cari =$_GET['kata_cari'];
    $seleksi = "SELECT * FROM kue WHERE 
        id like '%".$kata_cari."%' OR nama like '%".$kata_cari."%' OR jenis like '%".$kata_cari."%' OR stok like '%".$kata_cari."%' OR harga like '%".$kata_cari."%' ORDER BY id ASC";
                    
        }else{
            $seleksi = "SELECT * FROM kue order by id desc";
             }
            $hasil_seleksi = mysqli_query ($koneksi , $seleksi);

            if (!$hasil_seleksi){
            echo "Proses penyeleksian Data Kue gagal !!!";
            } else {
            while ($baris = mysqli_fetch_assoc ($hasil_seleksi)) {
            echo "<tr>
                <td>$baris[kode]</td>
                <td>$baris[nama]</td>
                <td>$baris[jenis]</td>
                <td>$baris[stok]</td>
                <td>$baris[harga] </td>
                <td>$baris[files]</td> 
                <td>
                <a class = 'btn btn-dark' href='form.php?action=edit&kode=$baris[kode]&
                                                             nama=$baris[nama]&
                                                             jenis=$baris[jenis]&
                                                             stok=$baris[stok]&
                                                             harga=$baris[harga]'>
                                                             Edit </a>
                </td>
                            
                <td>
                <a class = 'btn btn-danger' href='hapus.php?&id=$baris[id]'> Hapus </a>
                </td>
                <td> 
                <a class = 'btn btn-info' href=\"donlot.php?files=$baris[files]\"> Download </a>
                </td>            
                </tr>";


             };
        };
?>
</table>
<center><a class = 'btn btn-dark' href="form.php"> Tambah Data Kue </a></center>
</div>
</div>
</div>
</div>

<script src="js/script.js"></script>
<script type="text/javascript" scr="js/bootstrap.min.js"></script> 

</body>
</html>                
<?php 
 } 
 ?> 