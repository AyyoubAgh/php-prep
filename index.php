<?php

include './dao/connection.php';

    $pdo = new Connection();
    $stmt = $pdo->query('SELECT * FROM user');

    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        echo $row['firstName'] . '<br>';
    }
    echo 'hello';

?>