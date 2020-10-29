<?php
include('../configs/config.php'); 
include('../../index.php'); 
 
class manageDB { 
  function insert($genre) {
    $conn = mysqli_connect(db::servername .':' . db::port, db::user, db::password, 'Movie_reviews');
    $sql = "INSERT INTO genre(genrename) VALUES('$genre')";

    $view = new views(); 
    if (mysqli_query($conn, $sql)) { 
      // header('location: ../views/genreForm.html'); 
      echo "This is db"; 
      $view->render(); 
    }else {
      echo 'Error: ' . mysqli_error($conn); 
    }
  }
}
// echo $_REQUEST['genre']; 