<?php
$path = $_SERVER['DOCUMENT_ROOT'];
include_once($path.'/CS174-hw3/src/views/landingView.php');
include_once($path.'/CS174-hw3/src/views/genreView.php');
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
    $rArray = $call_db->fetchReviewsTitle();
    $dArray = $call_db->fetchReviewsDate();
    $call_view ->render($gArray, $rArray,$dArray,$genre);
  }
}
