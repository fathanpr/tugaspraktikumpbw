<?php 
require_once("auth.php"); 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil Admin</title>

    <link rel="stylesheet" href="dashboard.css">
</head>
<body>
<div class="center">
   <h1>Profil Admin</h1>
      <div class="profil">
      <h3>Nama  &nbsp;: <?php echo $_SESSION["nama"]["nama"] ?></h3>
      <h3>Email &nbsp;&nbsp;&nbsp;: </span><?php echo $_SESSION["nama"]["email"] ?></h3>
      </div>
       <a href='logout.php'><input type="submit" name='login' value='Logout'></a>
</div>
</body>
</html>