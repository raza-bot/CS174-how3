<?php 

class reviewForm {

  function render() {
    $genre = $_REQUEST['genres']; 
    ?>
    <!DOCTYPE html>
    <html>
      <head>
        <title>Review</title>
      </head>

      <body>
        <form action='../controllers/reviews.php' method="get">
          <h1>Add Review</h1>
          <label for='title'>Title:</label>
          <input type="text" id='title' name='title' /><br/>
          <label for='review'>Revew</label><br/>
          <textarea  cols="35" rows="20"  type="text" id='review' name='review'></textarea><br/>
          <input type='hidden' value='{$genres}' id='genres' name='genres' />
          <button style="margin-left: 100px;" >Save</button>
      </body>
    </html>
    <?php
  }
}

