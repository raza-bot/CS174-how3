<?php

class addGenre
{
  function render()
  {
    ?>
    <html>
    <head>
      <title>Add Genre</title>
    </head>
      <h1><a href ="?&start=yes">Movie Reviews</a></h1>
    <body>
      <form action='' method="get">
        <label for='genre'> <h1>Add Genre</h1>
        </label><br />
        <input type="text" id='genreName' name='genreName' placeholder="Genre name">
        <button>Add</button>
      </form>
    </body>

    </html>
    <?php
  }
}

 ?>
