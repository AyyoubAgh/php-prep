<?php

include './dao/userDaoImpl.php';
    $uDAO = new UserDAOImpl();
    
    var_dump($uDAO->connectUser('admin@super.com','adminsuper'));
    var_dump($uDAO->getAllUsers());
    var_dump($uDAO->getUser('admin@super.com'));
    
?>