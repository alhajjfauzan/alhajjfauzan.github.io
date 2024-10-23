<?php
session_start();
    if (!isset($_SESSION['login'])) {
        echo "
        <script>
            alert('login dulu');
            window.location.href = 'login.php'; 
        </script>";
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/x-icon" href="img/serangga.png">
    <title>InsectPedia: Informasi Tentang Serangga</title>
    <style>
        @font-face {
        font-family:'kal';
        src: url('font/tumbuhan.woff') format("woff");}
        @font-face {
            font-family: 'roman';
            src: url('font/dayoff.woff') format("woff");
        }
    </style>
</head>

<body>
<header>    
    <nav class="navbar">
        <a href=# class="logotop">InsectPedia</a>
        <ul class="menu">
            <li class="barground"><a href="index.php" class="connec">Beranda</a></li>
            <li class="barground"><a href="tentang_saya.php" class="connec">Tentang Saya</a></li>
            <li class="barground"><a href=#logofot class="connec">kontak</a></li>
            <li class="barground"><a href="logout.php" class="connec">Logout</a></li>
        </ul>
        <div class="hamburger">
            <span class="garis"></span>
            <span class="garis"></span>
            <span class="garis"></span>
        </div>
    </nav>
</header>
    <div class="centerword">
        <h1 class="sizepos">Selamat Datang di InsectPedia</h1>
        <p style="margin-top: auto;">Gerbang untuk mempelajari tentang Serangga.</p>
        <button onclick="darklight()" style ="background-color: transparent; border: transparent">
            <img id="lightdark" src="img/matahari.png">
        </button>
    </div>
    <div class="box1">
        <div class="searchbar">
            <input type="text" id="search" placeholder="Cari Ordo">
            <button onclick="searchInH3()">Cari</button>
        </div>
        <div class="baris">
            <div class="kartupage">
                <img src="img/badak1.jpg" style="object-fit:cover; margin-left: 2px; margin-top: 5px;">
                <div class="desc">
                    <button onclick="peringatan()"><h3>COLEOPTERA</h3></button>
                </div>
            </div>
            <div class="kartupage">
                <img src="img/kupu3.jpg" style="object-fit: cover; margin-left: 2px;  margin-top: 5px;">
                <div class="desc">
                    <button onclick="peringatan()"><h3>LEPIDOPTERA</h3></button>
                </div>
            </div>
            <div class="kartupage">
                <img src="img/bee.jpg" style="object-fit: cover ;margin-left: 2px;  margin-top: 5px;">
                <div class="desc">
                <button onclick="peringatan()"><h3>HYMENOPTERA</h3></button>
                </div>
            </div>
            <div class="kartupage">
                <img src="img/bela6lang.jpg" style="object-fit: cover; margin-left: 2px;  margin-top: 5px;">
                <div class="desc">
                    <button onclick="peringatan()"> <h3>ORTHOPTERA</h3></button>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <img id="logofot" src="img/logos.png"> funkbassr@gmail.com 
    </footer>
<script src="js/script.js">
</script>
</body>
</html>