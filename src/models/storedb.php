<?php
include('../configs/config.php'); 
include('../../index.php'); 
 
class manageDB { 
  function insertData($genre) {
    $conn = mysqli_connect(db::servername .':' . db::port, db::user, db::password, 'Movie_reviews');
    $sql = "INSERT INTO genre(genrename) VALUES('$genre')";

    if (mysqli_query($conn, $sql)) { 
      // header('location: ../views/genreForm.html'); 
      echo "This is db"; 
      $this->fetchData(); 
      //fetch genres from
    }else {
      echo 'Error: ' . mysqli_error($conn); 
    }
  }

  function fetchData() {
      $conn = mysqli_connect(db::servername .':' . db::port, db::user, db::password, 'Movie_reviews');
      
      $sql = 'SELECT genrename FROM genre ORDER BY genrename'; 
      $result = mysqli_query($conn, $sql); 
      while($row = mysqli_fetch_assoc($result)) 
      {
      echo "id: " . $row["genrename"] . "<br>";
      }
  } 
}
// echo $_REQUEST['genre']; 