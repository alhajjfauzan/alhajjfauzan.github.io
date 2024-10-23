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
require "koneksi.php";

$id = $_GET["id"];

$result = mysqli_query($conn, "SELECT * FROM insect WHERE id = $id");

while ($row = mysqli_fetch_assoc($result)) {
    $insect[] = $row;
}

$insect = $insect[0];

if (isset($_POST["submit"])) {
    $nama_serangga = $_POST["nama_serangga"];
    $tmp_name = $_FILES["fotho"]["tmp_name"];
    $files = $_FILES["fotho"]["name"];
    $ukuran_file = $_FILES["fotho"]["size"];
    $sisa_gambar = $insect["fotho"];
    if (!empty($files)) {
        $ekstensi = explode(".", $files);
        if (count($ekstensi) > 1) {
            $ekstensi = strtolower(end($ekstensi));
            $batas_ukuran = 2 * 1024 * 1024;
            $ekstensi_boleh_masuk = ['png', 'jpg', 'jpeg'];
            if (in_array($ekstensi, $ekstensi_boleh_masuk) && $ukuran_file <= $batas_ukuran) {
                date_default_timezone_set('Asia/Makassar');
                $tanggal= date('Y-m-d H.i.s');
                $ekstensi2 = $tanggal . '.' . $ekstensi;
                $alamat_lama = 'img/' .$sisa_gambar;
                if (!empty($sisa_gambar) && file_exists($alamat_lama)) {
                    unlink($alamat_lama);
                }
                if (move_uploaded_file($tmp_name, 'img/' . $ekstensi2)) {
                    $ordo = $_POST["ordo"];
                    $habitat = $_POST["habitat"];
                    if (!empty($insect['fotho']) && file_exists($insect['fotho'])) {
                        unlink($insect['fotho']);
                    }
                    $sql = "UPDATE insect SET fotho = '$ekstensi2', nama_serangga='$nama_serangga', ordo='$ordo',habitat='$habitat' WHERE id = $id";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        echo "
                        <script>
                        alert('Berhasil Mengubah Data Insect!');
                        document.location.href = 'menucrud.php';
                        </script>
                        ";
                    } else {
                        echo "
                        <script>
                        alert('Gagal Mengubah Data Insect!');
                        </script>
                        ";
                    }
                }else{
                    echo" <script>
                        alert('File gagal diubah');
                        </script>";
                }

                }else{
                    echo" <script>
                        alert('ukuran file melewati batas!');
                        </script>";
                }
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/darkmode.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InsectPedia: Informasi Tentang Serangga</title>
</head>
<body>
<style>
        .navbar{
    min-height: 70px;
    margin: 0px;
    padding: 0px 24;
    display:flex;
    text-decoration: none;
    align-items: center;
    list-style: none;
    font-size: 22px;
    justify-content: space-between;
    font-family: 'kal';
    z-index: 1;

}
.input-container {
    background-color: rgba(255, 255, 255, 0.8); 
    padding: 10px; 
    border-radius: 4px; 
    margin-bottom: 15px; 
    box-shadow: 0 1px 5px rgba(0, 0, 0, 0.1); 
}
.menu{
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 45px
}
input[type="file"] {
        display: none; 
        }
        .hiasformfile {
            display: inline-block;
            padding: 10px 20px;
            background-color: #1E3E62;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .hiasformfile:hover {
            background-color: #87A2FF;
            color: black;
        }
.desc{
    text-align: center;
}
.logotop{
    font-size: 1.6rem;
    margin-left: 25px;
}
input[type="file"] {
        display: none; 
        }
        .hiasformfile {
            display: inline-block;
            padding: 10px 20px;
            background-color: #1E3E62;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .hiasformfile:hover {
            background-color: #87A2FF;
            color: black;
        }
.baris{
    margin: 0 -5px;
}
.tombol{
    border: transparent;
}
.row:after{
    content: "";
    display: table;
    clear: both;
}
.connec:hover{
    color: #DCFFB7;
}
li{
    list-style: none;
}
a{
    color: #D6EFD8;
    text-decoration: none;
}
header{
    background-color: #1A5319;
    margin-left: 10;
    max-width: auto;
    position: sticky;
    top:0;
    z-index: 1;
}
.hamburger{
    display:none;
    cursor: pointer;
}
.garis{
    display: block;
    width: 25px;
    height: 3px;
    margin: 5px auto;
    background-color: #D6EFD8;

}
#logofot{
    position: relative;
    height: 50px;
    width: auto;
    bottom: -20px;
}
.lapang{
    background-color: #1A5319;
    padding: 100px;
    width: auto;
    margin-top:-10px;
    height: calc(50vh - 50px);
}

#lightdark{
    height: 40px;
    margin-bottom: 40px;
    align-items: center;
    width: auto;
}
.centerword {
    padding: 30px; 
    background-color: #72BF78;
    border-radius: 8px; 
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); 
    border: 2px solid #D6EFD8; 
    max-width: 400px;
    margin: 0 auto; 
    padding: 20px; 
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); 
    font-family: 'roman';
    backdrop-filter: blur(10px); 
}

.centerword a {
    display: block; 
    text-align: center;
    margin-bottom: 20px; 
    text-decoration: none; 
    color: #007bff; 
    font-weight: bold; 
    transition: color 0.3s ease; 
}

.centerword a:hover {
    color: #0056b3; 
}
th, td {padding: 15px; text-align: left; }
body{
    margin: 0%;
    padding: 0%;
    background-image: url(../img/insect.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-color: rgba(0, 0, 0, 0.5);
    background-blend-mode: overlay;
    overflow-x: hidden;

}
table, th, td{
    border: 5px solid #E6FF94;
}
.box1{
    background-color: #294B29;
    padding: 20px;
    width: auto;
    height: 600px;
    max-width:auto;
    margin: 0 -5px ;
    justify-content: space-around;
}
 @font-face {
 font-family:'kal';
 src: url('font/tumbuhan.woff') format("woff");}        
 @font-face {
 font-family: 'roman';
 src: url('font/dayoff.woff') format("woff");
  }

.centerword a{
    display: block; 
    text-align: center;
    margin-bottom: 20px; 
    text-decoration: none; 
    color: #007bff; 
}

.centerword a:hover{
    text-decoration: underline; 
}

label {
    display: block; 
    margin-bottom: 5px; 
    font-weight: bold; 
}

input[type="text"], select{
    width: 100%; 
    padding: 10px; 
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 4px; 
    box-sizing: border-box; 
    transition: border-color 0.3s ease, box-shadow 0.3s ease;

}

input[type="text"]:focus, select:focus {
    border-color: greenyellow; 
    outline: none; 
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}
button {
    background-color:greenyellow; 
    color: black; 
    padding: 10px 15px; 
    border: none; 
    border-radius: 4px; 
    cursor: pointer; 
    width: 100%; 
    font-size: 16px; 
    transition: background-color 0.3s ease; 
}

button:hover {
    background-color: #0056b3; 
}
    </style>
</head>

<body>
<header>    
    <nav class="navbar">
        <a href=# class="logotop">InsectPedia</a>
        <ul class="menu">
            <li class="barground"><a href="indexadmin.php" class="connec">Beranda</a></li>
            <li class="barground"><a href="tentang_saya2.php" class="connec">Tentang Saya</a></li>
            <li class="barground"><a href=#logofot class="connec">kontak</a></li>
            <li class="barground"><a href="menucrud.php" class="connec">CRUD</a></li>
        </ul>
        <div class="hamburger">
            <span class="garis"></span>
            <span class="garis"></span>
            <span class="garis"></span>
        </div>
        <button onclick="darklight()" style ="background-color: transparent; border: transparent;position: absolute;
        top: 20px; 
        left: 40%; 
        z-index: 4;
        bottom: 0px;
        width: 0px;
        margin: 0; 
        padding: 0; 
        display: inline-block; 
        transform: translateX(-50%);">
            <img id="lightdark" src="img/matahari.png">
        </button>
    </nav>
</header>
    <div style="background-image: url('img/grass.jpg');
    background-position: center -300px;
    background-repeat: no repeat;
    background-size: cover;
    height: 65vh;
    padding-top: 0px;
    ">
    <div class="centerword">
    <a href="menucrud.php" style="color:black;">Kembali ke Menu</a>
    <h1 style="text-align: center;">Perbarui data Insect</h1>
    <br>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="input-container">
            <label for="nama_serangga">Nama Serangga</label>
            <input type="text" name="nama_serangga" id="nama_serangga" value="<?= $insect["nama_serangga"] ?>" required> 
        </div>
        <div class="input-container">
            <label for="ordo">Ordo</label>
            <input type="text" name="ordo" id="ordo" value="<?= $insect["ordo"] ?>"required>
        </div>
        <div class = "input-container"  style="text-align:center;">
        <label for="fotho"  class="hiasformfile">Upload foto</label>
        <?php if (!empty($insect["fotho"])): ?>
    <div>
        <img src="img/<?= $insect["fotho"] ?>" alt="Foto Serangga" style="max-width: 200px; max-height: 200px; margin-bottom: 10px;">
    </div>
<?php endif; ?>
        <input type="file" name="fotho" id="fotho"required>
        <p style= "font-family:'roman';
        font-size:12px">Ukuran File Minimal 2MB</p>
        </div>
        <div class="input-container">
            <label for="habitat">Habitat</label>
            <select name="habitat" id="habitat" required>
                <option value="Hutan"> <?php if($insect["habitat"] == "Hutan")  echo "selected "  ?> Hutan</option> 
                <option value="Padang Rumput"><?php if($insect["habitat"] == "Padang Rumput")  echo "selected "  ?>Padang Rumput</option>
                <option value="Tanah"><?php if($insect["habitat"] == "Tanah")  echo "selected "  ?>Tanah</option>
                <option value="Pohon dan Semak-semak"><?php if($insect["habitat"] == "Pohon dan Semak-semak")  echo "selected"  ?>Pohon dan Semak-semak</option>
                <option value="Tanah Lembab"><?php if($insect["habitat"] == "Tanah Lembab")  echo "selected "  ?>Tanah Lembab</option>
                <option value="Laut dan Perairan Tawar"><?php if($insect["habitat"] == "Laut dan Perairan Tawar")  echo "selected "  ?>Laut dan Perairan Tawar</option>
            </select>
        </div>

        <button type="submit" name="submit" style="font-family: 'roman'; background-color:#FEFF9F">Ubah</button>
        </div>
    </form>
    </div>
        </div>
    <div class="lapang">

</div>
<script src="js/script.js"></script>
</body>

<footer style="
    padding-bottom: 100px; 
    text-align: center; 
    background-image: url('img/daun.jpg'); 
    background-repeat: no-repeat;
    background-size: cover; 
    background-color: rgba(0, 0, 0, 0.5); 
    background-blend-mode: overlay;
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    color: #D6EFD8;
    height: 35px; 
">
    <img id="logofot" src="img/logos.png" alt="Logo" style="margin-top: 20px;">  funkbassr@gmail.com
</footer>
</html>