<!--  -->
<?php
  require 'connect.php';
?>
    <div class="projects-list projects-list-anim">
        <?php
            $query = pg_query($conn, 'SELECT * FROM projects ');
            $results = pg_fetch_all($query);
            foreach ($results as $project) {
                echo "
                    <label class='' onClick='updateProjectView($project[id])'>
                        <h3>".$project['name']."</h3>
                        <p></p>
                    </label>  
                ";
            };
        ?>
    </div>
    <div class="project-view">
        Select something to display here!
    </div>
<?php 
    pg_close($conn);
?>
<!--  -->