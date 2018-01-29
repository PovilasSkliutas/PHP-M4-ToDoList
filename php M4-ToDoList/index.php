<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'function.php';

$mas = getCsvFile();
//var_dump(mktime(0,0,0,date('m'),date('d'),date('Y')));
//var_dump($mas[0]['deadline']);

include 'view/index.view.php';



?>
