<?php 
session_start();

require 'functions.php';

$produk = mysqli_query($conn, "SELECT * FROM product");
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

        <section class="services">
            


            <?php foreach ( $produk as $row)  : ?>

            <div class="service">
                <div class="icon">
                    <img src="<?= $row['gambar']; ?>"
                        alt="<?= $row['nama']; ?>">
                </div>
                <h3> <?= $row['nama']; ?></h3>
                <p style="font-weight: bold;">Price : <?= $row['harga']; ?></p>
                <p>desc : <?= $row['deskripsi']; ?></p>
                 <p>toko : <a href="<?= $row['toko']; ?>" target="_blank">Click disini</a></p>
                <br>
                
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