<?php
  require 'connect.php';

  $query = pg_query($conn, "SELECT * FROM projects WHERE id = $_POST[id]");
  $results = pg_fetch_object($query);

  if ($results) {
<<<<<<< Updated upstream
    echo "
        Name: ".$results ->name."
=======
    echo "<div class='project-details'><h2><b>Name: </b> ".$results->name."</h2>
      <a href='".$results->github_link."' target='_blank'><img src='github.png' style='height: 1.5em;width: 1.5em;background: white;border: 2px solid white;border-radius: 100%;'> </a>
      <a href='https://".$results->demo_url."' target='_blank'> DEMO </a>
      <p>".$results->description."</p>
      <h3>Technologies I used:</h3>
        ".$results->technologies_name."<br><br>
        ".$results->libraries_name."
      </div>
>>>>>>> Stashed changes
    ";
  } else {
    echo "Something went wrong!";
  };
  pg_close($conn)
?>