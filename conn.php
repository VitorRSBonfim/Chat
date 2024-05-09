<?php

    $db = "Chat";
    $host = "localhost";
    $user = "root";
    $pass = "";

    try {
        $conn = new PDO('mysql:host='.$host.';dbname='.$db.'', $user, $pass);
    } catch (PDOException $ex){ 
        echo $ex -> getMessage();
    }

?>
