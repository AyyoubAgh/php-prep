<?php
    include '../controller/authenticate.php';
    if(!isset($_SESSION['login_user'])){
        header("location:login.php");
        die();
     }
?>
<html">
   
   <head>
      <title>Welcome </title>
   </head>
   
   <body>
      <h1>Welcome <?php echo $_SESSION['login_user'] ; ?></h1> 
      <h2><a href = "logout.php">Sign Out</a></h2>
   </body>
   
</html>