<?php
class fullReview
{
  function render($genre, $title, $comment)
  {
    ?>
    <!DOCTYPE html>
    <html>
      <head>
        <title>Review</title>
      </head>
      <body>
        <h1 style="display:inline;"><a href ="?start=yes">Movie Reviews/</a></h1>
        <h1 style ="display:inline;"><a href="?&genrePage=<?=$genre ?>"><?=$genre ?></a></h1>
        <br />

        <h1>Review: <?=$title ?></h1>
        <?php foreach($comment as $text){?>
          <p><?=$text ?></p>
        <?php } ?>
      </body>
    </html>
    <?php
  }
}
 ?>
