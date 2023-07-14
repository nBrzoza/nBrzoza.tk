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
    echo "<div>
      <h2>Name: <b>".$results->name."</b></h2>
      <p>".$results->description."</p>
      <h3>Skills I used:</h3>
      <label>".implode(', ', $skills)."</label>
      <span class='links'>
        <a href='".$results->github_link."' target='_blank'><img src='/images/github.png'></a>
        <a href='https://".$results->demo_url."' target='_blank'><img src='/images/web.png'></a>
        </span>
      </div>";
  } else {
    echo "Something went wrong!";
  };
  pg_close($conn)
?>