<?php 
  include('../models/storedb.php');
  $genre = $_REQUEST['genre']; 
  echo $genre; 

  $call_db = new manageDB(); 
  $call_db->insert($genre); 
