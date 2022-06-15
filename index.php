<?php 
session_start();



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
                <h1 style="font-family: Rubik Moonrocks, cursive; ">Wish_AnimE</h1>
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
            <div class="service">
                <div class="icon">📺</div>
                <h3 id="anime">MyAnime</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio dolore aliquid architecto?
                    Necessitatibus, fugit incidunt.</p>
            </div>
            <div class="service">
                <div class="icon">👍</div>
                <h3 id="best">Recommended</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio dolore aliquid architecto?
                    Necessitatibus, fugit incidunt.</p>
            </div>
            <div class="service">
                <div class="icon">🛒</div>
                <h3 id="best">Product</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio dolore aliquid architecto?
                    Necessitatibus, fugit incidunt.</p>
            </div>
            <div class="service">
                <div class="icon">📖</div>
                <h3>Author</h3>
                <p>Jovan Ruindungan<br>Ryval Onibala<br>Fernando Kawatu<br>Link video<br>
                    <a href="https://drive.google.com/drive/folders/1HoUSQASJHtCP-6WDo-hdd7vfTXID0wSr?usp=sharing"
                        target="_blank">Klik Disini</a>
                </p>

            </div>
        </section>

        <section class="gallery">
            <h2 id="All">All Favorite</h2>
            <img src="https://cdn.myanimelist.net/images/anime/1813/119179l.jpg" alt="">
            <img src="https://cdn.myanimelist.net/images/anime/1286/99889l.jpg" alt="">
            <img src="https://cdn.myanimelist.net/images/anime/7/72533l.jpg" alt="">
            <img src="https://cdn.myanimelist.net/images/anime/1670/119141l.jpg" alt="">
            <img src="https://cdn.myanimelist.net/images/anime/1276/120398l.jpg" alt="">
            <img src="https://cdn.myanimelist.net/images/anime/3/72831l.jpg" alt="">
            <img src="https://cdn.myanimelist.net/images/anime/1011/120243l.jpg" alt="">
            <img src="https://cdn.myanimelist.net/images/anime/5/53111.jpg" alt="">
            <img src="https://cdn.myanimelist.net/images/anime/1189/111994l.jpg" alt="">
            <img src="https://cdn.myanimelist.net/images/anime/7/76014l.jpg" alt="">
            <img src="https://cdn.myanimelist.net/images/anime/1985/96688.jpg" alt="">
            <img src="https://cdn.myanimelist.net/images/anime/7/74317.jpg" alt="">
            <img src="https://cdn.myanimelist.net/images/anime/1108/121157.jpg" alt="">
            <img src="https://cdn.myanimelist.net/images/anime/1171/109222l.jpg" alt="">
            <img src="https://cdn.myanimelist.net/images/anime/5/44560l.jpg" alt="">
            <img src="https://cdn.myanimelist.net/images/anime/1430/118919l.jpg" alt="">
            <img src="https://cdn.myanimelist.net/images/anime/8/80356l.jpg" alt="">
            <img src="https://cdn.myanimelist.net/images/anime/11/55267l.jpg" alt="">
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