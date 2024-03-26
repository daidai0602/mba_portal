<?php

$user = "root";

//DBと接続
try{

  $pdo = new PDO('mysql:host=localhost;dbname=2chan-bbs', $user, "");
}

?>