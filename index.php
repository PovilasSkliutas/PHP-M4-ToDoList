<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

//var_dump($_GET);die();

include 'function.php';

$mas = getCsvFile();

$count = count($mas);
$perPage = 4;
$pageCount = ceil($count/$perPage);
$psl = 1;
if (array_key_exists("psl", $_GET)) {
    $psl = $_GET['psl'];
}

$from = $perPage*($psl - 1);
$till = $perPage*$psl - 1;
if($till > ($count-1)) {
    $till = ($count-1);
}


//var_dump(mktime(0,0,0,date('m'),date('d'),date('Y')));
//var_dump($mas[0]['deadline']);

include 'view/index.view.php';



?>
