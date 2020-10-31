<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  include_once($path.'/CS174-hw3/src/models/storedb.php');
  include_once($path.'/CS174-hw3/src/controllers/showLanding.php');

  $genre = $_REQUEST['genre'];

  $call_view = new showLanding();
  $call_db = new manageDB();
  $call_db->insertGenre($genre);
  $call_view->showView();
