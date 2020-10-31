<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  include_once($path.'/CS174-hw3/src/models/storedb.php');
  include_once($path.'/CS174-hw3/src/views/showLanding.php');

  $title = $_REQUEST['title'];
  $review = $_REQUEST['review'];
  $date = date('yy-m-d');
  $genres = $_REQUEST['genres'];

  // $_REQUEST['genres'];


  $call_view = new showLanding();
  $call_db = new manageDB();
  $call_db->insertReview($genres, $title, $review, $date);
  $call_gview->showView();
