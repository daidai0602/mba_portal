<?php
$user = "root";

//DBと接続
try{
  $pdo = new PDO('mysql:host=localhost;dbname=2chan-bbs', $user, "root");
  echo "DBとの接続に成功しました";
} catch (PDOException $error){
  echo $error->getMessage();
}