<?php

include 'function.php';
//var_dump($_GET);
$id = $_GET['id'];

$todo = getCsvFile();

unset($todo[$id]);

addArrayToCsv($todo);

header("Location: index.php");

?>
