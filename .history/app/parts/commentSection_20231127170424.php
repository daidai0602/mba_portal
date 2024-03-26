<section>
        <?php foreach($comment_array as $comment) : ?>
          <!--　スレッドのidとコメントのthread _idが一致するとき -->
          <?php if($thread["id"] == $comment["thread_id"]) : ?>
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
          <?php endif
        <?php endforeach ?>

      </section>