<?php

include_once("./app/database/connect.php");
include("app/functions/comment_add.php");
include("app/functions/comment_get.php");
include("app/functions/thread_get.php");
?>

var_dump(thread_array);

<div class="threadWrapper">
    <div class="childWrapper">
      <div class= "threadTitle">
        <span>【タイトル】</span>
        <h1>2ちゃんねる掲示板を作ってみた</h1>
      </div>
      <?php include("commentSection.php"); ?>
      <?php include("commentForm.php"); ?>

    </div>
  </div>