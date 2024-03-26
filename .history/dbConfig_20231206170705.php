<?php

$dbName = 'mysql:host=localhost;dbname=２ちゃn;charset=utf8';
$userName = 'root';

try {
  $db = new PDO($dbName, $userName);
}catch (\Throwable $th){
  exit();
}