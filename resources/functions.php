<?php

function establishConnection() {
    $connectionString = "mysql:host=127.0.0.1;dbname=testdatabase";
    $username = "root";
    $password = "";

    try {
        return new PDO($connectionString, $username, $password);
    } catch (PDOException $ex) { 
        die("Connection ended due to an error.");
        echo $ex->getMessage();
    }
}
?>