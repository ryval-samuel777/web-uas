<?php 

session_start();

if ( !isset($_SESSION["login"])) {
    header("Location: login2.php");
    exit;
}

require 'functions.php';


$produk = mysqli_query($conn, "SELECT * FROM product");



if ( isset($_POST["submit"])) {

    
       // cek keberhasilan query
  if (tambah($_POST) > 0 ) {
      echo "<script> 
      alert('data berhasil ditambahkan');
       </script>";
       header("Refresh:0");
  } else {
    echo "<script> 
    alert('data gagal ditambahkan');
    document.location.href = crud_product.php; 
    </script>";
  }



}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Anime Wish</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto+Mono&family=Rubik+Moonrocks&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    
    <style type="text/css">
            .ab {
            font-family: sans-serif;
            font-size: 15px;
            background: grey;
            color: white;
            border: white 3px solid;
            border-radius: 5px;
            padding: 12px 20px;
            margin-top: 10px;
            text-align: left;
     }
    .ab {
        text-decoration: none;
     }
    .ab:hover{
        opacity:0.9; 
    }
    </style>
</head>

<body>
    <div class="container">


        <nav class="menu">
            <div class="menu-toggle">
                <input type="checkbox">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="brand">
                <h1 style="font-family: Rubik Moonrocks, cursive;">Product</h1>
            </div>

            <ul class="menu-list">
                <li><a href="index.php">Home</a></li>
                <li><a href="listAnime.php">MyAnime</a></li>
                <li><a href="product.php">Product</a></li>
                <li><a href="About.php">About</a></li>
                <?php if (!isset($_SESSION["login"])) { ?>
                <li><a href="login2.php">login</a></li>
                        <?php } else { ?>
                            <li><a href="crud_product.php">Add Product</a></li>  
                            <li><a href="logOut.php">Log Out</a></li>    
                    <?php } ?>
            </ul>
        </nav>



        <section class="services" style="position: relative;">

            <div class="service">
                <form name="todoForm" autocomplete="off" style="list-style: none;" action="" method="post">
                   <li>
                       <label for="nama">Nama Produk</label>
                       <input type="text" name="nama" id="nama" placeholder="isi nama Produk" required>
                   </li>
                   <li>
                       <label for="harga">Harga</label>
                       <input type="text" name="harga" id="harga"  placeholder="isi harga Produk" required>
                   </li>
                   <li>
                       <label for="gambar">Gambar</label>
                       <input type="text" name="gambar" id="gambar"  placeholder="isi url gambar Produk" required>
                   </li>
                   <li>
                       <label for="deskripsi">Deskripsi Produk</label>
                       <input type="text" name="deskripsi" id="deskripsi"  placeholder="isi deskripsi Produk" required>
                   </li>
                   <li>
                       <label for="toko">link toko</label>
                       <input type="text" name="toko" id="toko"  placeholder="link toko penjual" required>
                   </li>
                   <li>
                       <button type="submit" name="submit">Tambah Data !</button>
                   </li>
                </form>
            </div>
        </section>

        <section class="services">

            <?php foreach ( $produk as $row)  : ?>

            <div class="service">
                <div class="icon">
                    <img src="<?= $row['gambar']; ?>"
                        alt="<?= $row['nama']; ?>">
                </div>
                <h3> <?= $row['nama']; ?></h3>
                <p>Price : <?= $row['harga']; ?></p>
                <p>desc : <?= $row['deskripsi']; ?></p>
                 <p>toko : <a href="<?= $row['toko']; ?>" target="_blank">Click disini</a></p>
                <br>
               
                  <a class="ab" href="delete.php?id<?= $row['id']; ?>">Hapus</a>
                
            </div>
            <?php endforeach; ?>
        </section>


    </div>
    <script>
        const menuToggle = document.querySelector('.menu-toggle');
        const nav = document.querySelector('nav ul');

        menuToggle.addEventListener('click', function () {
            nav.classList.toggle('slide');
        });

        
    </script>

</body>

</html>