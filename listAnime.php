<?php 
session_start();
require 'functions.php';

$listAnime = mysqli_query($conn, "SELECT * FROM listAnime");



if ( isset($_POST["tambah"])) {

    
       // cek keberhasilan query
  if (tambah2($_POST) > 0 ) {
      echo "<script> 
      alert('data berhasil ditambahkan');
       </script>";
        header("Location: listAnime.php");
  } else {
    echo "<script> 
    alert('data gagal ditambahkan');
    document.location.href = listAnime.php; 
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
</head>

<body>
    <div class="container">

        <header class="header">
            <div class="hero">
                <h2 class="heading">Anime Wish</h2>
                <p class="sub-heading">List Your Anime You Want</p>
            </div>
            <div class="fitur satu">
                <h4 class="price">Live On Youtube</h4>
                <p class="item">Spy x Family</p>
            </div>
            <div class="fitur dua">
                <h4 class="price">Live On Youtube</h4>
                <p class="item">Kimi No Nawa</p>
            </div>
        </header>

        <nav class="menu">
            <div class="menu-toggle">
                <input type="checkbox">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="brand">
                <h1 style="font-family: Rubik Moonrocks, cursive;">My-Anime</h1>
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


        <section class="gallery2">
            <h2 id="All">Your's Anime</h2>
        </section>



        <section class="services" style="position: relative;">

            <div class="service">
              
                 <form name="todoForm" autocomplete="off" style="list-style: none;" action="" method="post">

                   <li>
                       <label for="nama">Nama Anime</label>
                       <input type="text" name="nama" id="nama" placeholder="isi nama anime yang ingin ditonton" required>
                   </li>
                   
                   <li>
                       <button type="submit" name="tambah">Tambah ke list</button>
                   </li>
                </form>
            </div>
        </section>

        <section class="services">


              <?php foreach ( $listAnime as $row)  : ?>

           <div class="service">
                <h5><?= $row['nama'] ?></h5>
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