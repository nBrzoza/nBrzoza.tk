<?php
  require 'connect.php';

  $query = pg_query($conn, "SELECT * FROM projects WHERE id = $_POST[id]");
  $results = pg_fetch_object($query);

  if ($results) {
    echo "
        Name: ".$results ->name."
    ";
  } else {
    echo "Something went wrong!";
  };
  pg_close($conn)
?>