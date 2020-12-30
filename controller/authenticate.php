<?php
   require_once('../dao/userDaoImpl.php' );
   $uDAO = new UserDAOImpl();
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {      
      $login = $_POST['login'];
      $login_session = $uDAO->getUser($login)->getFirstName();
      $password = $_POST['password']; 
      if($uDAO->connectUser($login, $password)) {
         $_SESSION['login_user'] = $login_session ;
         header("location: ../presentation/welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>