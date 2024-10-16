<?php
    require "koneksi.php";
    $sql = mysqli_query($conn, "SELECT * FROM insect");

    $insect = [];

    while ($row = mysqli_fetch_assoc($sql)) {
        $insect[] = $row;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/darkmode.css">
    <link rel="icon" type="image/x-icon" href="img/serangga.png">
    <title>InsectPedia: Informasi Tentang Serangga</title>
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
.menu{
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 45px
}
.desc{
    text-align: center;
}
.logotop{
    font-size: 1.6rem;
    margin-left: 25px;
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
    color: black;
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

#lightdark{
    height: 40px;
    margin-bottom: 40px;
    align-items: center;
    width: auto;
}
.centerword{
    background-color: #5F8D4E;
    padding: 160px;
    height: auto;
    width: auto;
    text-align: center;
    font-family: 'roman';
}

table{
    margin: 20px auto; 
}
tr{
    color: black;
    justify-content: space-between;
}
th, td {padding: 15px; text-align: left; background-color: #DCFFB7;}
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
    border: 5px solid #F3C623;
    border-radius: 6px;
    justify-content: space-around;
}
.tomboltambah{
    margin-top: -150px;
    margin-left: 30px;
    margin-right: 10px ;
    text-align: center;
    justify-content: space-between;
    
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
    </style>
</head>

<body>
<header>    
    <nav class="navbar">
        <a href=# class="logotop">InsectPedia</a>
        <ul class="menu">
            <li class="barground"><a href="indexmember.php" class="connec">Beranda</a></li>
            <li class="barground"><a href="tentang_saya2.html" class="connec">Tentang Saya</a></li>
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
        left: 50%; 
        width: 0;
        z-index: 1;
        bottom: 0px;
        transform: translateX(-50%);">
            <img id="lightdark" src="img/matahari.png">
        </button>
    </nav>
</header>
    <div style="background-image: url('img/grass.jpg');
    background-position: center -300px;
    background-repeat: no repeat;
    background-size: cover;
    height: 40vh;
    padding-bottom: auto;
    padding-top: 100px;
    color: white;
    font-size: 2rem; 
    font-family: Arial, sans-serif;
    background-color:rgba(0, 0, 0, 0.5);
    background-blend-mode:overlay;
    ">
    </div>
    <div class="centerword" style="display: flex; justify-content:center; margin-top:auto;">
    <table border=1 style="margin-top: -150px;margin-left: 300px; border-collapse: collapse; position: center; " >
        <thead>
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama</th>
                <th>Ordo</th>
                <th>Habitat</th>
                <th>E/D</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; foreach($insect as $ins) : ?>
            <?php $gambar = $ins["fotho"];?>
            <tr>
                <td><?= $i ?></td>
                <td> 
                         <center>
                            <?php if ($ins["fotho"] == "") {
                                echo "foto belum ada";
                            } else {
                                echo "<img src='img/$gambar' alt='foto' width='50px' height='50px'>";
                            } ?>
                        </center>
                </td>
                <td><?= $ins["nama_serangga"] ?></td>
                <td><?= $ins["ordo"] ?></td>
                <td><?= $ins["habitat"] ?></td>
                <td> <a href="editubah.php?id=<?= $ins['id'] ?>">Ubah</a> | <a href="hapus.php?id=<?= $ins['id'] ?>" onclick="return confirm('Yakin ingin menghapus data?');" >Hapus</a> </td>
            </tr>
            <?php $i++; endforeach ?>
        </tbody>
    </table>
    </div>
    <div class = "tomboltambah">
    <a href="tambahkan.php" style="
     padding:10px 20px; 
     display: inline-block;
     background-color: #DCFFB7; 
     border-radius: 6px;">Tambah Data</a>
    </div>

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
<script src="js/script.js">
</script>
</body>
</html>