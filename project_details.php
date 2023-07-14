<?php
  require 'connect.php';

  $query = pg_query($conn, "SELECT * FROM projects WHERE id = $_POST[id]");
  $results = pg_fetch_object($query);
  $skills = [];
  $skillsArray = explode(', ',$results->skills);
  foreach ($skillsArray as $skill) {
    $skills[] = "<span>$skill</span>";
  }

  if ($results) {
    echo "<div class='project-details'><h2><b>Name: </b> ".$results->name."</h2>
      <p>".$results->description."</p>
      <h3>Skills I used:</h3><label>
        ".implode(', ', $skills)."</label>
        <a href='".$results->github_link."' target='_blank'><img src='github.png' style='height: 1.5em;width: 1.5em;background: white;border: 2px solid white;border-radius: 100%;'></a>
        <a href='https://".$results->demo_url."' target='_blank'> DEMO </a>
      </div>
    ";
  } else {
    echo "Something went wrong!";
  };
  pg_close($conn)
?>