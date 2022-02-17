<html>
<title>Tambah Data Kue</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">



<?php if (empty($_GET['nama'])){?>
<table class="table table-bordered table-striped">
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
    <a class="btn btn-success btn-lg" href="https://api.whatsapp.com/send?phone=6287810161192" role="button">Order Now</a>
</div>
</div>

<form action="tambah.php" method="POST" enctype="multipart/form-data">
<div class=container>
<div class="card mt-3">
<center>
<div class="card-header bg-dark text-white">
Masukan Data Kue
</div>
</center>
        
    <div class="card-body">
    <form method="post" action="">
    <div class="form-group">
    <label>Kode</label>
    <input type="text" name="kode" id="kode" value="<?php error_reporting(0); echo $_POST['kode'];?>" class="form-control" placeholder="Masukan Kode Produk" required >
    </div>
            
    <form method="post" action="">
    <div class="form-group">
    <label>Nama Kue</label>
    <input type="text" name="nama" id="nama" value="<?php error_reporting(0); echo $_POST['nama'];?>" class="form-control" placeholder="Masukan Nama Produk" required>
    </div>
              
    <form method="post" action="">
    <div class="form-group">
    <label>Jenis Kue</label>
    <select class="form-control" name="jenis">
    <option value="<?php error_reporting(0); echo $_POST['jenis'];?>"><?=$_POST['jenis']?>
    </option>
    <option values="Kue Basah"> Kue Basah</option>
    <option values="Kue Kering"> Kue Kering</option>
    <option values="Bolu"> Bolu</option>
    <option values="Cake"> Cake</option>
    <option values="Tradisional"> Tradisional</option>
    <option values="Dessert"> Dessert</option>
    <option values="Roti"> Roti</option>
    </select>
    </div>
            
    <form method="post" action="">
    <div class="form-group">
    <label>Jumlah Stock</label>
    <input type="text" name="stok" id="stok" value="<?php error_reporting(0); echo $_POST['stok'];?>" class="form-control" placeholder="Masukan Jumlah Stock" required>
    </div>
            

            
    <form method="post" action="">
    <div class="form-group">
    <label>Harga</label>
    <input type="text" name="harga" id="harga" value="<?php error_reporting(0); echo $_POST['harga'];?>" class="form-control" placeholder="Masukan Harga Kue" required  >
    </div>
            
    <form method="post" action="">
    <div class="form-group">
    <label>Files</label>
    <input type="file" name="files" class="form-control" required  >
    </div>
            
            
    <center>
    <div class="card-body">
    <div align="center" colspan="2">
    <button type="submit" class="btn btn-success" name="Submit"> Submit</button>
    <button type="reset" class="btn btn-danger" name="Reset"> Reset</button>
    </div>
    </div>
           

  
<?php }
else{?>

<table class="table table-bordered table-striped">
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

<form action="ubah.php" method="GET">
<input name="kode" id="kode" type="hidden" value="<?php echo $_GET['kode'];?>" >
<div class=container>
<div class="card mt-3">
<center>
<div class="card-header bg-info text-white">
Edit Data Kue
</div>
</center>
            
    <div class="card-body">
    <form method="post" action="">
    <div class="form-group">
    <label>Nama Kue</label>
    <input type="text" name="nama" id="nama" value="<?php error_reporting(0); echo $_GET['nama'];?>" class="form-control" placeholder="Masukan Nama Kue" required>
    </div>
               
    <form method="post" action="">
    <div class="form-group">
    <label>Jenis Kue</label>
    <select class="form-control" name="jenis">
    <option value="<?php error_reporting(0); echo $_GET['jenis'];?>"><?=$_GET['jenis']?>
    </option>
    <option values="Kue Basah"> Kue Basah</option>
    <option values="Kue Kering"> Kue Kering</option>
    <option values="Bolu"> Bolu</option>
    <option values="Cake"> Cake</option>
    <option values="Tradisional"> Tradisional</option>
    <option values="Dessert"> Dessert</option>
    <option values="Roti"> Roti</option>
    </select>
    </div>
               
    
    <form method="post" action="">
    <div class="form-group">
    <label>Jumlah Stock</label>
    <input type="text" name="stok" id="stok" value="<?php error_reporting(0); echo $_GET['stok'];?>" class="form-control" placeholder="Masukan Jumlah Stock" required  >
    </div>       

            
    <form method="post" action="">
    <div class="form-group">
    <label>Harga</label>
    <input type="text" name="harga" id="harga" value="<?php error_reporting(0); echo $_GET['harga'];?>" class="form-control" placeholder="Masukan Harga Kue" required  >
    </div>
            
            
    <center>
    <div class="card-body">
    <div align="center" colspan="1">
    <button type="submit" class="btn btn-success" name="Submit"> Simpan</button>
    </div>
    </center>

  
</div> 
</table>
</form>
    

<script type="text/javascript" scr="js/bootstrap.min.js"></script>  
</form>
<?php
    }
   
?>