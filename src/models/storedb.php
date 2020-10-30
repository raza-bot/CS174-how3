<?php
include('../configs/config.php');
include('../../index.php');

class manageDB {
  function insertGenre($genre) {

    $conn = mysqli_connect(db::servername .':' . db::port, db::user, db::password, 'Movie_reviews');
    $sql = "INSERT INTO genre(genrename) VALUES('$genre')";

    if (mysqli_query($conn, $sql)) {
      // header('location: ../views/genreForm.html');
      echo "This is db";
      //fetch genres from
    }else {
      echo 'Error: ' . mysqli_error($conn);
    }
  }

  function fetchGenres() {
      $conn = mysqli_connect(db::servername .':' . db::port, db::user, db::password, 'Movie_reviews');
      $gArray = array();
      $sql = 'SELECT genrename FROM genre ORDER BY genrename';
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result))
      {
      $gArray[] = $row['genrename'];
      }
      return $gArray;
  }

  function insertReview($genres, $title, $review, $date) {
    $conn = mysqli_connect(db::servername .':' . db::port, db::user, db::password, 'Movie_reviews');
    $sql1 = "SELECT id FROM genre WHERE genrename='Action'"; 

    $result = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_assoc($result);
    
      // while($row = mysqli_fetch_assoc($result))
      // {
        // echo "id is: " . $row['id'] . "  "; 
      // }
      $id = $row['id']; 
      echo $id; 

    $sql = "INSERT INTO reviews VALUES($id,'$title', '$review', '$date')"; 

    if (mysqli_query($conn, $sql)) {
      // header('location: ../views/genreForm.html');
      echo "Added to reivew";
      //fetch genres from
    }else {
      echo 'Error: ' . mysqli_error($conn);
    }
  }
}
// echo $_REQUEST['genre'];
