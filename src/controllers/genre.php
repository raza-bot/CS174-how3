<?php
  include('../models/storedb.php');
  include('../views/landingView.php');
  $genre = $_REQUEST['genre'];

  $call_view = new landingView();
  $call_db = new manageDB();
  $call_db->insertData($genre);
  $gArray = $call_db->fetchData();
  $call_view ->  render($gArray, $gArray);
