<?php
$user = "root";

//DBと接続
try{
  $pdo = new PDO('mysql:host=localhost;dbname=2chan-bb', $user, "");
  echo "DBとの接続に成功しました";
} catch (PDOException $error){
  echo $error->getMessage();
}