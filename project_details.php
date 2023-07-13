<?php
  require 'connect.php';

  $query = pg_query($conn, "SELECT * FROM projects WHERE id = $_POST[id]");
  $results = pg_fetch_object($query);
  // $technologies = $results->technologies_id;

  if ($results) {
    echo "<h2><b>Name: </b> ".$results->name."</h2>
      <p>".$results->description."</p>
      <h3>Technologies I used:</h3>
      <ul>
        .$technologies.
      </ul>
    ";
  } else {
    echo "Something went wrong!";
  };
  pg_close($conn)
?>