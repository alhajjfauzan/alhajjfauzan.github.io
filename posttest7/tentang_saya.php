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
    <link rel="stylesheet" href="css/styleabout.css">
    <link rel="icon" type="image/x-icon" href="img/serangga.png">
    <title>Tentang Saya</title>
    
</head>
<body>
    <style>
        @font-face {
        font-family:'kal';
        src: url('font/tumbuhan.woff') format("woff");}
        @font-face {
            font-family:'roman';
            src: url('font/dayoff.woff') format("woff");
        }
    </style>
    <ul class="navbar">
        <li class="toleft"><a href=#>InsectPedia</a></li>
        <li><a href="index.php">Beranda</a></li>
        <li><a href="tentang_saya.php">Tentang Saya</a></li>
        <li><a href=#logofot>kontak</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
    </ul>
        <div class="profil">
        <ul class="info">
            <li>Nama: Al Hajj Fauzan</li>
            <li>NIM: 2309106019</li>
            <li>Kelas:A'23</li>
            <li>Hobi: Main/Buat Game</li>
            <li>Praktikum: <a href="https://classroom.google.com/c/NzA1MzMyNzkzODU2/a/NzIzMjk0Nzg1MDI2/details">POSTTEST6</a></li>
        </ul>
        </div>
    <footer>
        <img id="logofot" src="img/logos.png"> funkbassr@gmail.com 
    </footer>
</body>
</html>