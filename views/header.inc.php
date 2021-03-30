<!-- <?php session_start(); ?> -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css?ver=20"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <title>Document</title>
</head>
<header>
<div class="logo">
    <a href="index.php"><img src="img/logo.png" alt="logo"></a>
    <h3><a href="index.php">Guten Appetit!</a></h3>
</div>
<ul class="nav">
    <li><a href="about.php">About</a></li>
    <li><a href="menu.php">Menu Recommendation</a></li>
    <li><a href="mypage.php">My page</a></li>
</ul>
<div class="nav__left">
<li><?php
        if (!isset($_SESSION["chk_ssid"]) ||
        $_SESSION["chk_ssid"] != session_id()
        ) { ?>
            <div class="nav-item">
            <a class="nav-link" href="login.php">Login・Sign up</a>
        </div>
        <?php
        } else { ?>
            <div class="nav-item d-flex align-items-center" onclick="logout()" style="cursor: pointer;" >logout</li>

        <?php
        }
        ?>
    <script>
        function logout() {
            const data = confirm("ログアウトしますか?");
            if (data) {
                location.href = "logoutPrcoess.php";
            }

        }

</script></div>
</div>
</header>
<a href="#" class="nav__bar">
    <i class="fas fa-bars"></i>
</a>
<script>    
const hamburger = document.querySelector('.nav__bar');
const logo =  document.querySelector('.logo');
const nav =  document.querySelector('.nav');
const nav__left =  document.querySelector('.nav__left');

hamburger.addEventListener('click', () => {
    logo.classList.toggle('active');
    nav.classList.toggle('active');
    nav__left.classList.toggle('active');
});
</script>
