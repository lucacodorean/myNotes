<?php 

require 'resources/functions.php';

if(isset($_POST["id"])) {
    $connection = establishConnection();
    $query = $connection->prepare("delete from assignments where idAssignment = {$_POST["id"]}");
    $query->execute();
    $connection = null;
}
?>