<html>
<title>Tambah Data Buku</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">


<?php if (empty($_GET['nama_supplier'])){?>
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

<form action="tambahsupplier.php" method="POST" enctype="multipart/form-data">
<div class=container>
<div class="card mt-3">
<center>
<div class="card-header bg-dark text-white">
Masukan Data Supplier
</div>
</center>
        
    <div class="card-body">
    <form method="post" action="">
    <div class="form-group">
    <label>Kode Supplier</label>
    <input type="text" name="kd_supplier" id="kd_supplier" value="<?php error_reporting(0); echo $_POST['kd_supplier'];?>" class="form-control" placeholder="Masukan Kode Supplier" required >
    </div>
            
    <form method="post" action="">
    <div class="form-group">
    <label>Nama Supplier</label>
    <input type="text" name="nama_supplier" id="nama_supplier" value="<?php error_reporting(0); echo $_POST['nama_supplier'];?>" class="form-control" placeholder="Masukan Nama Supplier" required>
    </div>
              
    <form method="post" action="">
    <div class="form-group">
    <label>Alamat</label>
    <input type="text" name="alamat" id="alamat" value="<?php error_reporting(0); echo $_POST['alamat'];?>" class="form-control" placeholder="Masukan Alamat Supplier" required>
    </div>
            
    <form method="post" action="">
    <div class="form-group">
    <label>No Telpon</label>
    <input type="text" name="telp" id="telp" value="<?php error_reporting(0); echo $_POST['telp'];?>" class="form-control" placeholder="Masukan No Telpon" required>
    </div>
                      
    <form method="post" action="">
    <div class="form-group">
    <label>Email</label>
    <input type="text" name="email" id="email" value="<?php error_reporting(0); echo $_POST['email'];?>" class="form-control" placeholder="Masukan Email Supplier" required  >
    </div>
            
    <form method="post" action="">
    <div class="form-group">
    <label>Data Supplier</label>
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
<form action="ubahsupplier.php" method="GET">
<input name="kd_supplier" id="kd_supplier" type="hidden" value="<?php echo $_GET['kd_supplier'];?>" >
<div class="container">
<div class="card mt-3">
<center>
<div class="card-header bg-dark text-white">
Edit Data Supplier
</div>
</center>
            
    <div class="card-body">
    <form method="post" action="">
    <div class="form-group">
    <label>Nama Supplier</label>
    <input type="text" name="nama_supplier" id="nama_supplier" value="<?php error_reporting(0); echo $_GET['nama_supplier'];?>" class="form-control" placeholder="Masukan Nama Supplier" required>
    </div>
               
    
    <form method="post" action="">
    <div class="form-group">
    <label>Alamat</label>
    <input type="text" name="alamat" id="alamat" value="<?php error_reporting(0); echo $_GET['alamat'];?>" class="form-control" placeholder="Masukan Alamat Supplier" required>
    </div>
               
    
    <form method="post" action="">
    <div class="form-group">
    <label>No Telpon</label>
    <input type="text" name="telp" id="telp" value="<?php error_reporting(0); echo $_GET['telp'];?>" class="form-control" placeholder="Masukan No Telpon Supplier" required>
    </div>
            

            
    
    <div class="form-group">
    <label>Email</label>
    <input type="text" name="email" id="email" value="<?php error_reporting(0); echo $_GET['email'];?>" class="form-control" placeholder="Masukan Email Supplier" required  >
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