<div class="threadWrapper">
    <div class="childWrapper">
      <div class= "threadTitle">
        <span>【タイトル】</span>
        <h1>2ちゃんねる掲示板を作ってみた</h1>
      </div>
      <section>
        <?php foreach($comment_array as $comment) : ?>
          <article>
            <div class="wrapper">
              <div class="nameArea">
                <span>名前：</span>
                <p class="username"><?php echo $comment["username"]; ?></p>
                <time?>：<?php echo $comment["post_date"]; ?></time>
              </div>
              <p class="comment"><?php echo $comment["body"]; ?></p>
            </div>
          </article>
        <?php endforeach ?>

      </section>
      <form class="formWrapper" method="POST">
        <div>
          <input type="submit" value="書き込む" name="submitButton">
          <label>名前：</label>
          <input type="text" name="username">
        </div>
        <div>
          <textarea class="commentTextArea" name="body"></textarea>
        </div>
      </form>
    </div>
  </div>