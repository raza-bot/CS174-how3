<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  include_once($path.'/CS174-hw3/src/models/storedb.php');
  // include('../views/landingView.php');
  $title = $_REQUEST['title'];
  $review = $_REQUEST['review'];
  $date = date('yy-m-d');
  $genre = 'Action';

  // $_REQUEST['genres'];


  // $call_view = new landingView();
  $call_db = new manageDB();
  $call_db->insertReview($genres, $title, $review, $date);
  // $gArray = $call_db->fetchReviews();
  // $call_view ->  render($gArray, $gArray);
