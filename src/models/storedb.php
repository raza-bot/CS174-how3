<?php
include('../configs/config.php'); 
 
class manageDB {
  function insert($genre) {
    $conn = mysqli_connect(db::servername .':' . db::port, db::user, db::password, 'Movie_reviews');
    echo " It is: " . $genre; 
    $sql = "INSERT INTO genre(genrename) VALUES('$genre')";

    if (mysqli_query($conn, $sql)) { 
      header('location: ../views/genreForm.html'); 
    }else {
      echo 'Error: ' . mysqli_error($conn); 
    }
  }
}
// echo $_REQUEST['genre']; 