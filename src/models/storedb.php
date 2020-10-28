<?php
include('../configs/config.php'); 
$conn = mysqli_connect(db::servername .':' . db::port, db::user, db::password, 'Movie_reviews'); 

$genre = $_REQUEST['genre']; 
$sql = "INSERT INTO genre(genrename) VALUES('$genre')";

if (mysqli_query($conn, $sql)) { 
  header('location: ../controllers/genreForm.php'); 
}else {
  echo 'Error: ' . mysqli_error($conn); 
}
// echo $_REQUEST['genre']; 