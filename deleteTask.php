<?php
session_start();
include 'function.php';
//var_dump($_GET);
$id = $_GET['id'];

$todo = getCsvFile();

unset($todo[$id]);

addArrayToCsv($todo);
$_SESSION['mesage']='Deleted successfull';
header("Location: index.php");
?>
