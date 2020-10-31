<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  include_once($path.'/CS174-hw3/src/models/storedb.php');
  include_once($path.'/CS174-hw3/src/views/landingView.php');

  $title = $_REQUEST['title'];
  $review = $_REQUEST['review'];
  $date = date('yy-m-d');
  $genres = 'Action';

  // $_REQUEST['genres'];


  $call_view = new landingView();
  $call_db = new manageDB();
  $call_db->insertReview($genres, $title, $review, $date);
  $gArray = $call_db->fetchGenres();
  $rArray = $call_db->fetchReviewsTitle();
  $dArray = $call_db->fetchReviewsDate();
  $call_view ->  render($gArray, $rArray,$dArray);
