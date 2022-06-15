<?php 


session_start();

if ( isset($_SESSION["login"])) {
	header("Location: index.php");
	exit;
}


require 'functions.php';


if( isset($_POST["register"]) ) {

	if( registrasi($_POST) > 0 ) {
		echo "<script>
				alert('user baru berhasil ditambahkan! Silahkan login');
			  </script>";
		
	} else {
		echo mysqli_error($conn);
	}

	
} elseif ( isset($_POST["login"])) {
	header("Location: login2.php");
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
                        Daftar
                    </h1>
                    <input type="text" name="username" placeholder="Enter Username" id="username">
                    <input type="password" name="password" placeholder="Enter Password" id="password">
                    <input type="password" name="password2" placeholder="konfirmasi password" id="password2">

                    <div class="sejajar">
                    	   <input type="submit" name="register" value="daftar" >
                        <input type="submit" name="login" value="Halaman login" >
                     
                    </div>

                </form>
            </div>

            <div class="fitur satu">
                <h4 class="price">Ayo Daftar</h4>
                <p class="item">Daftarkan dirimu segera untuk menjelaja website ini</p>
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
                <h1 style="font-family: Rubik Moonrocks, cursive; ">Daftar</h1>
            </div>

            <ul class="menu-list">
                
                <li><a href="register.php">Halaman Register</a></li>
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