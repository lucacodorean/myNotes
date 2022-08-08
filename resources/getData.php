<?php 

require 'resources/task.php';   
require 'resources/database.php';

$connection = Database::establishConnection();
echo $connection;
$command = $connection->prepare("select * from assignments");
$command->execute();

$selectedInfo = $command->fetchAll(PDO::FETCH_OBJ);

$assignments = [];
foreach($selectedInfo as $assignment) {
    array_push($assignments, new Task($assignment->idAssignment, $assignment->description, $assignment->status, $assignment->comments));
}
?>