<?php

require 'resources\functions.php';
require 'resources\task.php';   

$connection = establishConnection();
$command = $connection->prepare("select * from assignments");
$command->execute();


$selectedInfo = $command->fetchAll(PDO::FETCH_OBJ);

$assignments = [];
foreach($selectedInfo as $assignment) {
    array_push($assignments, new Task($assignment->idAssignment, $assignment->description, $assignment->status, $assignment->comments));
}

require 'index.view.html';
?>
