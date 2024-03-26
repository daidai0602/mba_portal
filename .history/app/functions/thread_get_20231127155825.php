<?php
$thread_array = array();

//コメントデータをテーブルから取得
$sql = "SELECT * FROM comment";
$statement = $pdo->prepare($sql);
$statement->execute();

$thread_array = $statement;
// var_dump($comment_array->fetchAll());
