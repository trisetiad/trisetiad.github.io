 <?php 
    ob_start();     
    session_start(); 
    
	 
	 if(!isset($_SESSION['finalweb'])) { 
      include("home.php"); 
    }
	

	
   $user= $_POST['user']; 
   $password= $_POST['password']; 
   $_SESSION['user'] = $user; 
   
   $Open = mysqli_connect("localhost","root","","finalweb");           
   
   if (!$Open){ 
    die ("Koneksi ke Engine MySQL Gagal !"); 
    } 
	
   $Koneksi = mysqli_select_db($Open,"finalweb");
   
   if (!$Koneksi){ 
    die ("Koneksi ke Database Gagal !"); 
    } 
	
    $sql = "SELECT * FROM login where user='$user'"; 
    $qry = mysqli_query($Open,$sql); 
    $num = mysqli_num_rows($qry); 
    $row = mysqli_fetch_array($qry); 
 
    if ($num==0 OR $password!=$row['password']) { 
?> 
	
    <script language="JavaScript"> 
    alert('Username atau Password tidak sesuai !');
	document.location='home.php'; 
    </script> 
	
    <?php 
    }
    else { 
        $_SESSION['login']=1; 
        header("Location: index.php"); 
    } 
    mysqli_close($Open); //Tutup koneksi engine MySQL 
 
 ?>
