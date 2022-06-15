<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto+Mono&family=Rubik+Moonrocks&display=swap"
        rel="stylesheet">
    <title>About</title>
    <link rel="stylesheet" href="styles.css">
    <script src="javascript.js"></script>
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
                <h1 style="font-family: Rubik Moonrocks, cursive;">About Us</h1>
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
                <div class="icon" style="text-align: center;">👦</div>
                <h3 style="text-align: center;">Jovan Ruindungan<br>20021106131</h3>

            </div>
            <div class="service">
                <div class="icon" style="text-align: center;">👨</div>
                <h3 style="text-align: center;">Ryval Onibala<br>20021106066</h3>

            </div>
            <div class="service">
                <div class="icon" style="text-align: center;">🏃</div>
                <h3 style="text-align: center;">Fernando Kawatu<br>20021106085</h3>

            </div>
        </section>

        <h2 class="disable-select" style="color: #ddd;">hidden</h2>
        <!-- footer -->

        <div class="footer-a">
            <div>
                <h2 class="footer-title">Tentang Kami</h3>
                    <div class="footer-text">
                        <p>kami Adalah Kelompok 7 dari kelas F Yang beranggotakan 3 orang <br>
                            dan berikut ini adalah link video presentasi kami
                        </p>
                        <p><a href="https://drive.google.com/drive/folders/1HoUSQASJHtCP-6WDo-hdd7vfTXID0wSr?usp=sharing"
                                target="_blank" style="color: white;">Klik Disini</a></p>
                    </div>
            </div>
        </div>
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