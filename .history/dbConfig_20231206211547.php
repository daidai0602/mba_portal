<?php

$dbName = 'mysql:host=localhost;dbname=imagePosting;charset=utf8';
$userName = 'root';

try {
  $db = new PDO($dbName, $userName);
}catch (\Throwable $th){
  exit();
}

function db_conn(){
  try {
      $db_name = "2chan-bbs";    //データベース名
      $db_id   = "root";      //アカウント名
      $db_pw   = "";      //パスワード：XAMPPはパスワード無しに修正してください。
      $db_host = "localhost"; //DBホスト

      //localhostでなければさくらに接続する
      if($_SERVER["HTTP_HOST"] != 'localhost'){
          $db_name = 'limepony43_';    //データベース名
          $db_id   = 'limepony43';      //アカウント名
          $db_pw   = 'Irukapapa413';      //パスワード：XAMPPはパスワード無しに修正してください。
          $db_host = 'mysql57.limepony43.sakura.ne.jp'; //DBホスト
          }

      $pdo = new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
      return $pdo;
  } catch (PDOException $e) {
      exit('DB Connection Error:' . $e->getMessage());
  }
  
}