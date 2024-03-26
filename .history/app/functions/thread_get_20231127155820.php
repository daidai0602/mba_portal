<?php
$tread_array = array();

//コメントデータをテーブルから取得
$sql = "SELECT * FROM comment";
$statement = $pdo->prepare($sql);
$statement->execute();

$tread_array = $statement;
// var_dump($comment_array->fetchAll());
