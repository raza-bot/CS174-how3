<?php
class genreView {

function render($gArray, $rArray,$dArray, $genre)
{
    ?>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>Movie Review</title>
      </head>
      <body>
        <h1><a href ="?start=yes">Movie Reviews/<?=$genre ?></a></h1>
        <br />

        <table class="left">
          <tr>
            <th>Genres</th>
          </tr>
          <?php foreach($gArray as $genres) {?>
            <tr>
              <td><a href="?&genrePage=<?=urldecode($genres)?>"> &#8226; <?=$genres ?></a><td>
            </tr>
        <?php  } ?>
        </table>
        <table>
          <tr>
            <th>Reviews</th>
          </tr>
          <tr>
            <td><a href='../views/reviewsForm.html?&genres=<?=urldecode($genre)?>'>&#8226; [New Review]</a></td>
          </tr>
          <?php foreach($rArray as $i => $reviews) {?>
            <tr>
              <td class="left">&#8226; <?=$reviews ?></a><td>
              <td class="left date"><?=$dArray[$i] ?></td>
            </tr>
            <?php  } ?>
        </table>
      </body>
    </html>

    <style>
      table, td, th {height: 25px; width: 250px; text-align: center;}
      .left {text-align: left;}
      .date {width: 500px;}
      th {font-size: 200%;}
      table.left {float: left}
      table.right {float: right}
    </style>
<?php
  }
}
