<?php

include 'koneksi.php';
 
session_start();

if(isset($_POST['submit'])){

   $username = mysqli_real_escape_string($koneksi, $_POST['username']);
   $email = ($_POST['email']);
   $pass = ($_POST['password']);
   $cpass = ($_POST['cpassword']);

   $select = " SELECT * FROM tbl_login WHERE username = '$username' && email = '$email' && password = '$pass'";

   $result = $koneksi->query($select); 

   if(mysqli_num_rows($result) > 0){
      $error[] = 'user already exist';
   }else{
      if($pass != $cpass){
         $error[] = 'password not mathched!';
      }else{
         $insert = "INSERT INTO tbl_login(username, email, password) VALUES('$username','$email','$pass')";
         $koneksi->query($insert);
         header('location:index.php');
      }
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Design.css">
    <title>Sign Up</title>
</head>

<body style="background-image: url(gambar/pxfuel\ -\ Copy.jpg);">
    <div class="kotak">
    <form action="" method="post" >
        <h1>Register Now</h1>
        <?php
        if(isset($error)){
           foreach($error as $error){
              echo '<span class="error-msg">'.$error.'</span>';
           }
        }
     ?>
<br>
<br>

        <tr>
            <td>Username : </td>
            <input type="text" name="username" placeholder="Masukkan Username" class="box" required>
        
<br>
<br>
      
            <td>E-mail :</td>
            <input type="email" name="email" placeholder="Masukkan E-mail" class="box" required>
 
        <br>
        <br>
      
            <td>Password : </td>
            <input type="password" name="password" placeholder="Masukkan Password" class="box" required>
       
        <br>
        <br>
      
            <td>Confirm Password : </td>
            <input type="password" name="cpassword" placeholder="Konfirmasi Password" class="box" required>
        </tr>

        <br>
        <br>
        <input type="submit" value="register" class="form-btn-daftar" name="submit" style="color: black;">
<br>
<br>
<p style="font-family:Georgia, 'Times New Roman', Times, serif;">Punya akun? <a href="index.php" style="text-decoration: underline;">login</a></p> 
</div>
        <td></td>
    </form>
</body>
