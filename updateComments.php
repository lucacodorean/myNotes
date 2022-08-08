<?php

require 'resources/functions.php';

$connection = establishConnection();

if(isset($_POST["id"]) && isset($_POST["comments"][0])) {
    echo "merge";
    $query = $connection->prepare("update assignments set comments = :comments where idAssignment = :id");
    $query->execute([
        'comments' => $_POST["comments"][0],
        'id'       => $_POST["id"]
    ]);
    $connection = null;
}
?>