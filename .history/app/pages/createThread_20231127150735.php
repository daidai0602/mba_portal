<?php
include_once("../database/connect.php");
?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>新規スレッド作成ページ</title>
  <link rel="stylesheet" href="../../assets/css/style.css">
</head>

<body>
  <?php include("../../app/parts/header.php"); ?>
  <?php include("../parts/validation.php"); ?>

  <div>
    <h2>新規スレッド立ち上げ場</h2>
  </div>
  <form method="POST" class="formWrapper">
    <div>
      <label>スレッド名</label>
      <input type="text" name="title">
      <label>名前</label>
      <input type="text" name="username">
    </div>
    <div>
      <textarea name="body" class="threadSubmitButton"></textarea>
    </div>
    <input type="submit" value="立ち上げ">
  </form>

</body>
</html>