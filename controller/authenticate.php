<?php
   require_once('../dao/userDaoImpl.php' );
   $uDAO = new UserDAOImpl();
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $login = $_POST['login'];

      $login_session = $uDAO->getUser($login)->getLogin();
      $login_FirstName = $uDAO->getUser($login)->getFirstName();
      $login_LastName = $uDAO->getUser($login)->getLastName();
      $login_role = $uDAO->getUser($login)->getRole();
      $login_status = $uDAO->getUser($login)->getStatus();

      $password = $_POST['password']; 
      if($uDAO->connectUser($login, $password)) {

         $_SESSION['login_user'] = $login_session ;
         $_SESSION['login_FirstName'] = $login_FirstName ;
         $_SESSION['login_LastName'] = $login_LastName ;
         $_SESSION['login_role'] = $login_role ;
         $_SESSION['login_status'] = $login_status ;

         header("location: ../presentation/welcome.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>