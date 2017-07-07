<?php
  if(!isset($_GET{'page'})) {
    $page = 1;
  }
  else {
    $page = $_GET{'page'};
  }
?>
<!DOCTYPE html>
<html lang = "en">

  <head>
    <title>User Profiles</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>

  <body>
    <!-- user data table -->
    <table class="table table-hover">
      <thead class="thead-inverse">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Age</th>
          <th>DOB</th>
          <th>Country</th>
          <th>Email</th>
        </tr>
      </thead>
      <tr>
        <?php
        if($count != 1) {
            $end = $page * 10;
            if($end > $count)
              $end = $count;
            for($i = ($page-1)*10;$i < $end ;$i++) {
              echo '<tr><td>'.$ud[$i]->id.'</td><td>'.$udp[$i]->name.'</td><td>'.$udp[$i]->age.'</td><td>'.$udp[$i]->dob.'</td><td>'.$udp[$i]->country.'</td><td>'.$ud[$i]->email.'</tr>';
            }
        }
        else {
          echo '<tr><td>'.$ud->id.'</td><td>'.$udp->name.'</td><td>'.$udp->age.'</td><td>'.$udp->dob.'</td><td>'.$udp->country.'</td><td>'.$ud->email.'</tr>';
        }
        ?>
      </tr>
    </table>
    <nav>
      <ul class="pagination">
        <?php
          $pages = ceil($count/10);
          echo '<li class="page-item">';
          for($i = 0;$i < $pages;$i++) {
            echo '<a href="?page='.($i+1).'" class="page-link">'.($i+1).'</a>';
          }
          echo '</li>';
        ?>
      </ul>
    </nav>
    <nav aria-label="Page navigation example">
</nav>

    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

    <!-- Tether -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>

</html>
