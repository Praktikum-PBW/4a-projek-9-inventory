<?php 
include "auth.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" />
    <link rel="stylesheet" href="./style.css" />
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/869/869027.png" type="image/x-icon">
  </head>
  <body>
    <!-- partial:index.partial.html -->
    <form method="post">
    <div class="screen-1">
      <img class="logo" src="css/img/logo.png" alt="" width="150" height="150" />
      <h1>Inventory</h1>
      <div class="username">
        <label for="username">Username</label>
        <div class="sec-2">
          <ion-icon name="mail-outline"></ion-icon>
          <input type="username" name="username" placeholder="Masukan Username" required/>
        </div>
      </div>
      <div class="password">
        <label for="password">Password</label>
        <div class="sec-2">
          <ion-icon name="lock-closed-outline"></ion-icon>
          <input class="pas" type="password" name="password" placeholder="Masukan Password" required/>
          
        </div>
      </div>
      <button class="login" type="submit" name="Login">Login</button>
    </div>
    </form>
    <!-- partial -->
    <script  src="./script.js"></script>
  </body>
</html>
