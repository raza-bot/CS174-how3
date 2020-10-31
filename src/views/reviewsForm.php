<?php
class reviewPage
{
  function render($genre)
  {
    ?>
    <!DOCTYPE html>
    <html>
      <head>
        <title>Review</title>
      </head>

      <body>
        <form action='' method="get">
          <h1>Add Review</h1>
          <label for='title'>Title:</label>
          <input type="text" id='title' name='title' /><br/>
          <label for='review'>Revew</label><br/>
          <textarea  cols="35" rows="20"  type="text" id='review' name='review'></textarea><br/>
          <input type="hidden" id='editGenre' name='editGenre' value='<?php echo $genre; ?>'>
          <button style="margin-left: 100px;" >Save</button>
      </body>
    </html>
    <?php
  }
}
 ?>
