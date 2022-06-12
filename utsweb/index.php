<?php
    include 'koneksi.php';
    session_start();
    if($_SESSION['status_login'] !== true){
        echo '<script>window.location="login.php"</script>';
        error_reporting(0);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="stylee.css">
    <title>Annisa Hijab House</title>
</head>
<body>
    <!-- header -->
    <header>
        <div class="container">
        <h1><a href="index.php">Annisa Hijab House</a></h1>
        <ul>
            <li><a href="index.php">Dashboard</a></li>
            <li><a href="datakategori.php">Data Kategori</a></li>
            <li><a href="dataproduk.php">Data Produk</a></li>
            <li><a href="order.php">order</a></li>
            <li><a href="logout.php">Log Out</a></li>
        </ul>
    </header>
     <!-- content -->
    <div class="section">
        <div class="container">
        <h3>Dashboard</h3>
        <div class="box">
            <h4 style="text-align : center">Selamat Datang <?php echo $_SESSION['a_global']->username ?> Annisa Hijab House - Segera Cek New Produk dari toko kami</h4>
            <p style="text-align : center">Dapatkan Promo Buy 1 Get 2 Sekarang!</p>
            <img src="2.jpg" align-items="center" width="1048px" height="700px">
        </div>
        </div>
    </div>
    
     <!-- footer -->
     <footer>
         <div class="container">
             <small>Copyright &copy; 2022 - Annisa Hijab House </small>
         </div>
     </footer>
</body>
</html>