<?php
require 'koneksi.php';
if (isset($_POST["submit"])) {
    if (isset($_POST["emaile"]) && isset($_POST["pasword"])) {
        $emaile = $_POST["emaile"];
        $pasword = $_POST["pasword"];
        $sql = "SELECT * FROM data_user WHERE emaile='$emaile' AND pasword ='$pasword'"; 
        $result = $conn->query($sql); 
        if ($result->num_rows > 0) { 
         $_SESSION['emaile'] = $emaile; 
            header("Location: menucrud.php");
        }    
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/serangga.png">
    <title>InsectPedia| Login</title>
    <style>
    #daunfot{
    background-repeat: no-repeat;
    background-size: cover;
    position: relative;
    text-align: center; 
    top: 0px;
    bottom: 0px;
    height: 10px;
    width: 100%; 
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    color:#D6EFD8;
    background-color: rgba(0, 0, 0, 0.5); 
    background-blend-mode: overlay;
    }
        @font-face {
            font-family: 'roman';
            src: url('font/dayoff.woff') format("woff");
        }
.navbar{
    min-height: 70px;
    margin: 0px;
    padding: 0px 27;
    display:flex;
    text-decoration: none;
    align-items: center;
    list-style: none;
    font-size: 22px;
    justify-content: space-between;
    font-family: 'kal';

}
p{
    text-align: center;
}
.menu{
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 45px;
    margin-right: 30px;
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
body{
    margin: 0%;
    padding: 0%;
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
.pasword a {
    color: darkblue;}
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
h3{
    display: block;
}
@font-face {
        font-family:'kal';
        src: url('font/tumbuhan.woff') format("woff");}
        @font-face {
            font-family: 'roman';
            src: url('font/dayoff.woff') format("woff");
        }
footer{
    background-image: url('../img/daun.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    padding-bottom: 100px; 
    position: relative;
    text-align: center; 
    top: 0px;
    bottom: 0px;
    height: 10px;
    width: 100%; 
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    color:#D6EFD8;
    background-color: rgba(0, 0, 0, 0.5); 
    background-blend-mode: overlay;
}
.cardlogin{
    text-align: center;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    height: 100vh;
    padding: 0 5px;
    border-radius: 5px;
    margin-left: 30px;
    margin-top: 100px;
}
h2{
    text-align: center;
}
input[type="email"], input[type="password"], input[type="text"], input[type="phone"] {
    flex-direction: column;
    align-items: center;
    display: block;
    width: 300px;               
    padding: 10px;           
    font-size: 16px;             
    color: #333;                 
    background-color: #f9f9f9;   
    border: 2px solid #ccc;       
    border-radius: 10px;         
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1); 
    transition: 0.3s;              
}
h3, input{
    display: block;
    width: 100%; 
    max-width: 300px; 
    margin-bottom: 10px;
}
input[type="password"] {

    flex-direction: column;
    align-items: center;
    display: block;
    width: 300px;               
    padding: 10px;           
    font-size: 16px;             
    color: #333;                 
    background-color: #f9f9f9;   
    border: 2px solid #ccc;       
    border-radius: 10px;         
    box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1); 
    transition: 0.3s;              
}
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

.kartu {
  font-family: "roman";
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-image: url('/img/mop.jpg'); 
  animation: slideIn 0.6s ease-out;
}

.kartulogin {
  width: 400px;
  padding: 30px;
  background-color: white;
  border-radius: 15px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  border: 1px solid #ccc;
}
.kartulogin .container{
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.kartulogin input {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 10px;
    width: 100%;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}
.kartulogin input:focus {
    border-color: #4CAF50;
    box-shadow: 0 0 10px rgba(76, 175, 80, 0.4); 
}

.kartulogin button {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease, transform 0.2s ease;
}
.kartulogin button:hover {
    background-color: #45a049;
    transform: scale(1.05); 
}

.kartulogin .container:last-child {
    display: flex;
    justify-content: space-between;
    padding-top: 10px;
}
.container {
  padding: 16px;
  justify-content: space-between;
}

input[type=email], input[type=password], input[type=phone], input[type=text]{
  width: 100%;
  padding: 10px 0 10px 10px;
  margin: 8px 0 20px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 4px;
}

button[type=submit], .cancelbtn {
  width: 100%;
  padding: 10px;
  background-color: #4CAF50;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
button[type=button].cancelbtn {
  background-color: #f44336;
}

button[type=submit]:hover, .cancelbtn:hover {
  opacity: 0.8;
}

.pasword {
  float: right;
  padding-top: 0px;
}

</style>
</head>
<body>
    <header>    
        <nav class="navbar">
            <a href=# class="logotop">InsectPedia</a>
            <ul class="menu">
                <li class="barground"><a href="index.php" class="connec">Beranda</a></li>
                <li class="barground"><a href="tentang_saya.html" class="connec">Tentang Saya</a></li>
                <li class="barground"><a href=#logofot class="connec">kontak</a></li>
                <li class="barground"><a href="login.php" class="connec">Login</a></li>
            </ul>
            <div class="hamburger">
                <span class="garis"></span>
                <span class="garis"></span>
                <span class="garis"></span>
            </div>
        </nav>
    </header>
    <div class="kartu" style="background-image: url('img/mop.jpg'); font-family:'roman';
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh; 
  animation: slideIn 0.6s ease-out;">
        <form action="login.php" method="post" class="kartulogin">
            <div class="container">
                <label for="emaile"><b>Email</b></label>
                <input type="email" placeholder="Isi Email" name="emaile" required>
        
                <label for="pasword"><b>Password</b></label>
                <input type="password" placeholder="Isi Password" name="pasword" required>
        
                <button type="submit" name="submit" value="submit">Login</button>
            </div>
        
            <div class="container" style="background-color:#f1f1f1">
                <span class="pasword"><a href="">Lupa Password?</a></span>
                <span><a href="register.php" style="color: darkblue;">Belum punya akun?</a></span>
            </div>
        </form>
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
    <img id="logofot" src="img/logos.png" alt="Logo" style="margin-top: 20px;"> funkbassr@gmail.com
</footer>

</body>
</html>