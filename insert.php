<?php

require 'resources/functions.php';

$connection = establishConnection();

$query = $connection->prepare("INSERT INTO assignments(description, comments, status) VALUES(:desc, :comments, :status);");
$query->execute([
        'desc' => $_POST["description"][0],
        'comments' => $_POST["comments"][0],
        'status' => $_POST["status"]
    ]);
$connection = null;
?>