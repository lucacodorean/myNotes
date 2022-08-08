<?php

require 'resources/functions.php';

var_dump($_POST);
die();

if(isset($_POST["id"])) {
    $connection = establishConnection();
    $query = $connection->prepare("
                        update assignments 
                        set status = !(select status from assignments where idAssignment = {$_POST["id"]})  
                        where idAssignment = {$_POST["id"]};");
    $query->execute();
    $connection = null;
}
?>