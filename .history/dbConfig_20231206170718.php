<?php

$dbName = 'mysql:host=localhost;dbname=2chan-bbs;charset=utf8';
$userName = 'root';

try {
  $db = new PDO($dbName, $userName);
}catch (\Throwable $th){
  exit();
}