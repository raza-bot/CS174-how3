<?php
class landingView {

function render($gArray, $rArray,$dArray)
{
    ?>
    <!DOCTYPE html>
    <html lang="en" dir="ltr">
      <head>
        <meta charset="utf-8">
        <title>Movie Review</title>
      </head>
      <body>
        <h1><a href ="../views/showLanding.php">Movie Reviews</a></h1>
        <br />

        <table class="left">
          <tr>
            <th>Genres</th>
          </tr>
          <tr>
            <td><a href='./src/views/addGenre.html'>&#8226; [New Genres]</a></td>
          </tr>
          <?php foreach($gArray as $genres) {?>
            <tr>
              <td><a href="../views/landingView.php?&genres=<?=urldecode($genres)?>"> &#8226; <?=$genres ?></a></td>
              <td class="left delete"><a href='../views/editView.php?&genres=<?=$genres ?>'>[-]</a></td>
              <td></td>
            </tr>
        <?php  } ?>
        </table>
        <table>
          <tr>
            <th>Reviews</th>
          </tr>
          <?php foreach($rArray as $i => $reviews) {?>
            <tr>
              <td class="left">&#8226; <?=$reviews ?></a></td>
              <td class="left date"><?=$dArray[$i] ?></td>
            </tr>
            <?php  } ?>
        </table>
      </body>
    </html>

    <style>
      table, td, th { height: 25px; width: 250px; text-align: center;}
      .delete {width: 10px;}
      .left {text-align: left;}
      .date {width: 500px;}
      th {font-size: 200%;}
      table.left {float: left}
      table.right {float: right}
    </style>
<?php
  }
}
