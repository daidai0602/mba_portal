<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style.css">
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet">
    <style>div{padding: 10px;font-size:16px;}td{padding:5px; margin:5px;border:1px solid #777; background:#fff;}</style>
</head>

<body>

    <?php include("menu.php"); ?>
  <title>画像投稿アプリ</title>
</head>
<body>
  <?php include('../dbConfig.php') ?>
  <?php include('../getDatas.php') ?>
  <?php include('./header.php') ?>
  <div class="imageList">
    <?php foreach ($data as $image){ ?>
      <a href="./imageDetail.php?id=<?php echo $image['id']; ?>"><img src="../images/<?php echo $image['file_name']; ?>" alt="投稿動画"></a>
    <?php }; ?>
</div>
</body>
</html>