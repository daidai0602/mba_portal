<?php
$error_message = array();

if (isset($_POST["threadSubmitButton"])) {

    //スレッド入力チェック
  if(empty($_POST['title'])){
    $error_message["title"] = "お名前を入力してください。";
  }else {
    //エスケープ処理
    $escaped["title"] = htmlspecialchars($_POST["title"], ENT_QUOTES, "UTF-8");
  }

  //お名前入力チェック
  if(empty($_POST['username'])){
    $error_message["username"] = "お名前を入力してください。";
  }else {
    //エスケープ処理
    $escaped["username"] = htmlspecialchars($_POST["username"], ENT_QUOTES, "UTF-8");
  }
    //コメント入力チェック
  if(empty($_POST["body"])){
    $error_message["body"] = "コメントを入力してください。";
  } else {
    //エスケープ処理
    $escaped["body"] = htmlspecialchars($_POST["body"], ENT_QUOTES, "UTF-8");
  }

  if(empty($error_message)){
      $post_date = date("Y-m-d H:i:s");

      //スレッドを追加
      $sql = "INSERT INTO `thread` (`title`) VALUES (:title);";
      $statement = $pdo->prepare($sql);
    
      //値をセットする
      $statement->bindParam(":title", $escaped["title"], PDO::PARAM_STR);

      $statement->execute();

      //コメントも追加する
      $sql = "INSERT INTO comment (username, body, post_date, thread_id)
      VALUES (:username, :body, :post_date, (SELECT id FROM thread WHERE title = :title))";
      $statement = $pdo->prepare($sql);

      //値をセットする
      $statement->bindParam("")
  }

  //掲示板ページに遷移する
  header("Location: http://localhost/php_2chan");
}