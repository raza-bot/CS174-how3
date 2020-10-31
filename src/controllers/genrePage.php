<?php
$path = $_SERVER['DOCUMENT_ROOT'];
include_once($path.'/CS174-hw3/src/views/genreView.php');
include_once($path.'/CS174-hw3/src/models/storedb.php');

$genre = $_REQUEST['genres'];

$call_gview = new genreView();
$call_db = new manageDB();
$gArray = $call_db->fetchGenres();
$rArray = $call_db->fetchReviewsTitle();
$dArray = $call_db->fetchReviewsDate();
$call_gview ->render($gArray, $rArray,$dArray,$genre);
