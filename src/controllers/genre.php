<?php 
  include('../models/storedb.php');
  $genre = $_REQUEST['genre']; 

  $call_db = new manageDB(); 
  $call_db->insertData($genre); 
