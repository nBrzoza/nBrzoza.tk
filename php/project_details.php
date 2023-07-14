<?php
  require 'connect.php';

  $query = pg_query($conn, "SELECT * FROM projects WHERE id = $_POST[id]");
  $results = pg_fetch_object($query);
  $skillsArray = explode(', ', $results->skills);
  $skills = [];
  foreach ($skillsArray as $skill) {
    $skills[] = "<span>$skill</span>";
  }


  if ($results) {
    echo "
      <h2>Name: <b>".$results->name."</b></h2>
      <p>".$results->description."</p>
      <h3>Skills I used:</h3>
      <label>".implode(', ', $skills)."</label>
    ";
  } else {
    echo "Something went wrong!";
  };
  pg_close($conn)
?>