<?php
$path = $_SERVER['DOCUMENT_ROOT'];
include_once($path.'/CS174-hw3/src/configs/config.php');


class manageDB {
  function insertGenre($genre) {

    $conn = mysqli_connect(db::servername .':' . db::port, db::user, db::password, 'Movie_reviews');
    $sql = "INSERT INTO genre(genrename) VALUES('$genre')";

    if (mysqli_query($conn, $sql)) {
      // header('location: ../views/genreForm.html');
      //echo "This is db";
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

  function deleteGenre($genre) {

    $conn = mysqli_connect(db::servername .':' . db::port, db::user, db::password, 'Movie_reviews');
    $sql = "SELECT id FROM genre WHERE genrename='$genre'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];
    $sql1 = "DELETE FROM genre WHERE id = '$id' ";

    if (mysqli_query($conn, $sql1)) {
      //delete all reviews in that genre as well
      $sql2 = "DELETE FROM reviews WHERE genreid ='$id'";
      $result = mysqli_query($conn, $sql2);
    }else {
      echo 'Error: ' . mysqli_error($conn);
    }
  }

  function insertReview($genre, $title, $review, $date) {
    $conn = mysqli_connect(db::servername .':' . db::port, db::user, db::password, 'Movie_reviews');
    $sql1 = "SELECT id FROM genre WHERE genrename='$genre'";

    $result = mysqli_query($conn, $sql1);
    $row = mysqli_fetch_assoc($result);

      $id = $row['id'];

    $sql = "INSERT INTO reviews VALUES($id,'$title', '$review', '$date')";

    if (mysqli_query($conn, $sql)) {
      // header('location: ../views/genreForm.html');
      //fetch genres from
    }else {
      echo 'Error: ' . mysqli_error($conn);
    }
  }

  function fetchReviewsTitle() {
      $conn = mysqli_connect(db::servername .':' . db::port, db::user, db::password, 'Movie_reviews');
      $rArray = array();
      $sql = 'SELECT title , rdate FROM reviews ORDER BY rdate DESC';
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result))
      {
      $rArray[] = $row['title'];
      }
      return $rArray;
  }
  function fetchReviewsDate() {
      $conn = mysqli_connect(db::servername .':' . db::port, db::user, db::password, 'Movie_reviews');
      $dArray = array();
      $sql = 'SELECT rdate FROM reviews ORDER BY rdate';
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result))
      {
      $dArray[] = $row['rdate'];
      }
      return $dArray;
  }

   function fetchReviews() {
      $conn = mysqli_connect(db::servername .':' . db::port, db::user, db::password, 'Movie_reviews');
      
      $rvArray = array();
      $sql = 'SELECT review FROM reviews ORDER BY rdate';
      $result = mysqli_query($conn, $sql);
      while($row = mysqli_fetch_assoc($result))
      {
      $rvArray[] = $row['review'];
      }
      return $rvArray;
  }


}
