<?php
$path = $_SERVER['DOCUMENT_ROOT'];
include_once($path.'/CS174-hw3/src/models/storedb.php');
include_once($path.'/CS174-hw3/src/controllers/showViews.php');


if(isset($_REQUEST['genrePage']))
{
  $genre = $_REQUEST['genrePage'];
  $call_view = new showViews();
  $call_view ->showGenre($genre);
}

if(isset($_REQUEST['edit']))
{
  $genre = $_REQUEST['edit'];
  $call_view = new showViews();
  $call_view -> showReview($genre);
}

if(isset($_REQUEST['title']))
{
  $genre = $_REQUEST['editGenre'];
  $title = $_REQUEST['title'];
  $review = $_REQUEST['review'];
  $date = date('yy-m-d');
  $call_db = new manageDB();
  $call_db -> insertReview($genre,$title,$review,$date);
  $call_view = new showViews();
  $call_view -> showGenre($genre);
}

if(isset($_REQUEST['delete']))
{
$genre = $_REQUEST['delete'];
$call_view = new showViews();
$call_db = new manageDB();
$call_db->deleteGenre($genre);
$call_view -> showLanding();
}

if(isset($_REQUEST['start']))
{
$call_view = new showViews();
$call_view -> showLanding();
}
