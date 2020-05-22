<?php 

  include __DIR__ . "/../data/database.php";

  header("Content-Type: application/json");

  echo json_encode($albums);

?>