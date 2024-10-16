<?php
require "koneksi.php"; 

if (isset($_POST["submit"])) {
    $emaile = $_POST['emaile'];
    $pasword = $_POST['pasword'];
    $fullname = $_POST['fullname'];
    $telpon = $_POST['telpon'];
    $hashed_password = password_hash($pasword, PASSWORD_DEFAULT);
    $sql = "INSERT INTO data_user VALUES ('$emaile','$pasword','$fullname', '$telpon')";
    if(mysqli_query($conn, $sql)){
        header("Location: login.php");
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InsectPedia | Register</title>
    <style>
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
    background-image: url(../img/daun.jpg);
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
  background-image: url(../img/mop.jpg); 
  animation: slideIn 0.6s ease-out;
}

.karturegister {
  width: 400px;
  padding: 30px;
  background-color: white;
  border-radius: 15px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  border: 1px solid #ccc;
}
.karturegister .container{
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.karturegister input {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 10px;
    width: 100%;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}
.karturegister input:focus {
    border-color: #4CAF50;
    box-shadow: 0 0 10px rgba(76, 175, 80, 0.4); 
}

.karturegister button {
    background-color: #4CAF50;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease, transform 0.2s ease;
}
.karturegister button:hover {
    background-color: #45a049;
    transform: scale(1.05); 
}

.karturegister .container:last-child {
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
        * {box-sizing: border-box}
body{
    margin: 0;
    padding: 0%;
}
.container {
  padding: 16px;
}

input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

a {
  color: dodgerblue;
}

    </style>
</head>
<body>
  <div class="kartu" class="kartu" style="background-image: url('img/mop.jpg'); font-family:'roman';
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh; 
  animation: slideIn 0.6s ease-out;">>
    <form action="register.php" method="post" class="karturegister">
        <div class="container">
            <label for="fullname"><b>Nama Lengkap</b></label>
            <input type="text" placeholder="Isi Nama Lengkap" name="fullname" required>
    
            <label for="emaile"><b>Email</b></label>
            <input type="email" placeholder="Isi Email" name="emaile" required>
    
            <label for="pasword"><b>Password</b></label>
            <input type="password" placeholder="Isi Password" name="pasword" required>
    
            <label for="telpon"><b>Nomor Telepon</b></label>
            <input type="text" placeholder="Isi Nomor Telepon" name="telpon">
    
            <button type="submit" name="submit" value="submit">Register</button>
        </div>
        <div class="container" style="background-color:#f1f1f1">
            <span><a href="login.php" style="color: darkblue;">Sudah punya akun?</a></span>
        </div>
        </form>
</div>
</body>


</html>