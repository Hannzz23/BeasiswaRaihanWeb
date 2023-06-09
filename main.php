<?php

include 'koneksi.php';

session_start();

if(!isset($_SESSION['username'])){
   header('location:index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="img/png" href="gambar/pngwing.com.png" sizes="16x16"/>
    <title>Home</title>
</head>
<body>
    <style>
       body {
    margin: 0;
}

.atas{
    background-color: black;
    width: 100%;
    height: 50px;
    display: flex;
    align-items: center;
}
.atas a{
    padding: 15px;
    font-size: larger;
    font-family: Arial;
    font-style:unset;
    text-decoration: none;
    color: white;
}
.atas a:hover{
    text-transform: uppercase;
    background-color: white;
    color: black;
}
.register{
    position: absolute;
    width: 100%;
    height: 700px;
    align-items: center;
    text-align: center;
    
}
.register p{
    padding-top: 200px;
    font-size: 50pt;
    display: inline-block;
    text-transform: uppercase;
}
.register a{
    font-size: 25pt;
    border: solid blue;
    border-radius: 25px;
    padding: 17px 23px
}
.register a:hover{
    background-color: blue;
    color: white;
}

    </style>
<div class="dasar">
    <div class="atas">
        <a href="tentangbea.php">Tentang Beasiswa</a>
        
    </div>

    <div class="register" style="background-image: url(gambar/beasiswa.jpg);  background-size: cover;">
        <p style="text-decoration: dashed white;color: blue; ">Ingin punya beasiswa?</p> <br>
        <a href="crud.php">Click Here</a>
    </div>
</div>
</body>

</html>