<?php
$path = $_SERVER['DOCUMENT_ROOT'];
include_once($path.'/CS174-hw3/src/views/landingView.php');
include_once($path.'/CS174-hw3/src/views/genreView.php');
include_once($path.'/CS174-hw3/src/views/reviewsForm.php');
include_once($path.'/CS174-hw3/src/views/addGenre.php');
include_once($path.'/CS174-hw3/src/views/fullReview.php');
include_once($path.'/CS174-hw3/src/models/storedb.php');
class showViews
{
  function showLanding()
  {
    $call_view = new landingView();
    $call_db = new manageDB();
    $gArray = $call_db->fetchGenres();
    $rArray = $call_db->fetchReviewsTitle();
    $dArray = $call_db->fetchReviewsDate();
    $call_view ->  render($gArray, $rArray,$dArray);
  }

  function showGenre($genre)
  {
    $call_view = new genreView();
    $call_db = new manageDB();
    $gArray = $call_db->fetchGenres();
    $rArray = $call_db->fetchSpecificReviewTitle($genre);
    $dArray = $call_db->fetchSpecificReviewDate($genre);
    $call_view ->render($gArray, $rArray,$dArray,$genre);
  }

  function showFullReview($genre,$title)
  {
    $call_view = new fullReview();
    $call_db = new manageDB();
    $comment = $call_db -> fetchFullReview($genre, $title);
    $call_view -> render($genre, $title, $comment);

  }

  function showAdd()
  {
    $call_view = new addGenre();
    $call_view -> render();
  }

  function showReview($genre)
  {
    $call_view = new reviewPage();
    $call_view -> render($genre);
  }

}
