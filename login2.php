<?php 



session_start();

if ( isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

 require 'functions.php';

if ( isset($_POST["login"])) {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");


    // cek username jika ada 
    if (mysqli_num_rows($result) === 1) {
    

        // cek pass

        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row["password"])) {

            // set session 
            $_SESSION["login"] = true;

            header("Location: index.php");
            exit;
        } 
        
        $error = true;
        
        
    }

 
} elseif ( isset($_POST["register"])) {
    header("Location: register.php");
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
        ::placeholder {
  color: white;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
 color: white;
}

::-ms-input-placeholder { /* Microsoft Edge */
 color: white;
}
    </style>
</head>

<body>
    <div class="container">

        <header class="header">
            <div class="hero-login">
                <form autocomplete="off" action="" method="post">
                    <h1>
                        login
                    </h1>
                    <input type="text" name="username" placeholder="Enter Username" id="username">
                    <input type="password" name="password" placeholder="Enter Password" id="password">
                    <div class="sejajar">
                        <input type="submit" name="login" value="login" >
                        <input type="submit" name="register" value="daftar" >
                    </div>

                </form>
            </div>

            <div class="fitur satu">
                <h4 class="price">Selamat Datang</h4>
                <p class="item">Silahkan Login atau Daftar</p>
            </div>
            <div class="fitur dua">
                <h4 class="price">Berlangganan</h4>
                <p class="item">untuk info menarik dari product kami</p>
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
                <h1 style="font-family: Rubik Moonrocks, cursive; ">Login</h1>
            </div>

            <ul class="menu-list">
                <li><a href="index.php">Home</a></li>
                <li><a href="listAnime.php">MyAnime</a></li>
                <li><a href="product.php">Product</a></li>
                <li><a href="About.php">About</a></li>
                <li><a href="login2.php">login</a></li>
            </ul>
        </nav>


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