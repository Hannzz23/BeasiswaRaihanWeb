

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Design.css">
</head>
<body style="background-image: url(gambar/pxfuel\ -\ Copy.jpg);">
    <style>
        .kotak{
        background-color: rgb(91, 139, 176);
        align-items: center;
        text-align: center;
        justify-content: center;
        border: solid 5px whitesmoke;
        border-radius: 10px;
        }
        .kotak input{
        border-radius: 10px;
        color: black;
        justify-content: center;
        
        }
        .box{
        padding-left: 10px;
        height: 40pt;
        }
        .form-btn-login{
        background-color: white;
        cursor: pointer;
        width: 27%;
        padding-left: 0;
        }
        
        .form-btn-login:hover{
        background-color: rgb(91, 139, 176);
        border: solid 5px whitesmoke;
        text-transform: uppercase;
        }
    </style>

<div class="kotak">

    <form method="post">
        <h3 class="title">LOGIN NOW</h3>
        <?php
         if(isset($error)){
            foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
            }
         }
      ?>
        <input type="name" name="username" placeholder="enter your username" class="box" required>
        <br>
        <br>
        <input type="password" name="password" placeholder="enter your password" class="box" required>
        <br>
        <br>
        <input type="submit" value="login" class="form-btn-login" name="submit" style="color: black;">
        <br>
        <br>
        <p >Belum Punya Akun? <a href="pendaftaran.php">Register</a></p>
    </form>

</div>
 <?php
 include 'koneksi.php';

 session_start();
 
 
 if(isset($_POST['submit'])){
    
   $username = $koneksi->real_escape_string($_POST['username']);
   $pass = ($_POST['password']);

  
   $st=$koneksi->prepare("SELECT * FROM tbl_login WHERE username = ? && password = ?");
   $st->bind_param("ss",$username,$pass);
   $st->execute();
   $hasil=$st->get_result();
  

   if($hasil->num_rows > 0){
      $_SESSION['username'] = $username;
      header('Location: main.php');
   }else{
      echo "<script language='javascript'>";
        echo "alert('User atau Password tidak sesuai');";
        echo "window.location.href = 'index.php';";
        echo '</script>';
   }

}
?>
</body>
</html>