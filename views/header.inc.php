<!-- <?php session_start(); ?> -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css?ver=0"> 
    <title>Document</title>
</head>
<header>
<div class="logo">
    <a href="index.php"><img src="img/logo.png" alt="logo"></a>
</div>
<ul class="nav">
    <li><a href="about.php">About</a></li>
    <li><a href="menu.php">Menu Recommendation</a></li>
    <li><a href="mypage.php">My page</a></li>
    <li><?php
        if (!isset($_SESSION["chk_ssid"]) ||
        $_SESSION["chk_ssid"] != session_id()
        ) { ?>
            <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
            </li>
        <?php
        } else { ?>
            <li class="nav-item d-flex align-items-center" onclick="logout()">logout</li>

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
    </script></li>
</ul>
</header>