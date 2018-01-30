<?php

include 'function.php';
//var_dump($_GET);
$id = $_GET['id'];

$todo = getCsvFile();

$todo[$id] ['done'] = "done";
//var_dump($todo[$id]);die();
addArrayToCsv($todo);

header("Location: index.php");

?>
