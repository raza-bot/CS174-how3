<?php
  include('../models/storedb.php');
  include('../views/landingView.php');
  $genre = $_REQUEST['genre'];
  
  $call_view = new landingView();
  $call_db = new manageDB();
  $call_db->insertGenre($genre);
  $gArray = $call_db->fetchGenres();
  $call_view ->  render($gArray, $gArray);
