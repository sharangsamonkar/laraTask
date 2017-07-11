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
    <!-- record updated message -->
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="display:none">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      Record successfully updated!
    </div>
    <!-- user data table -->
    <table class="table table-hover">
      <thead class="thead-inverse">
        <tr>
          <th><a href="/user_profiles" style="text-decoration:none">ID</a></th>
          <th>Name</th>
          <th>Age</th>
          <th><a href="/user_profiles/order" style="text-decoration:none">DOB</a></th>
          <th>Country</th>
          <th>Email</th>
        </tr>
      </thead>
        <?php
          $end = $page * 10;
          if($end > $count)
            $end = $count;
        ?>

        @if(count($userd) != 1)
          @for($i=($page-1)*10;$i<$end;$i++)
            <tr>
              <td>{{$userd[$i]->id}}</td>
              <td>{{$userd[$i]->name}}</td>
              <td>{{date_diff(date_create(date('Y-m-d',strtotime($userd[$i]->dob))),date_create('today'))->format("%Y")}}</td>
              <td contenteditable="true" onBlur="update(this,{{$userd[$i]->id}})">{{$userd[$i]->dob}}</td>
              <td>{{$userd[$i]->country}}</td>
              <td>{{$userd[$i]->email}}</td>
            </tr>
          @endfor
        @else
          <tr>
            <td>{{$userd[0]->id}}</td>
            <td>{{$userd[0]->name}}</td>
            <td>{{date_diff(date_create(date('Y-m-d',strtotime($userd[0]->dob))),date_create('today'))->format("%Y")}}</td>
            <td contenteditable="true" onBlur="update(this,{{$userd[0]->id}})">{{$userd[0]->dob}}</td>
            <td>{{$userd[0]->country}}</td>
            <td>{{$userd[0]->email}}</td>
          </tr>
        @endif
    </table>
    <nav>
      <ul class="pagination">
          <?php
             $pages = ceil($count/10);
          ?>
          @if($pages > 1)
            @for($i = 0;$i < $pages;$i++)
            <li class="page-item">
              <a href="?page={{$i+1}}" class="page-link">{{$i+1}}</a>
            </li>
            @endfor
          @endif
      </ul>
    </nav>
    <form action="/user_profiles/agesort" method="GET">
      Age Group:
      <select name="age_grp">
        <option value="0,100">All</option>
        <option value="0,18">Less than 18</option>
        <option value="18,25">18 - 25</option>
        <option value="25,30">25 - 30</option>
        <option value="30,100">Above 30</option>
      </select>
      <button type="submit" class="btn btn-default">Apply</button>
    </form>
    <div class="row">
      <div class="col-1">
        Search
      </div>
      <form action="/user_profiles/search" method="POST">
        <input type="text" id="search" class="col-10" name="query" />
        <input type="submit" value="Submit" />
      </form>
    </div>
    <!-- hints -->
    <!-- <div class="row" id="hints" style="display:none">
    </div> -->

    <!-- Ajax jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
    <script src="{{asset('js/ajax-crud.js')}}"></script>
    <!-- <script src="{{asset('js/search.js')}}"></script> -->

    <!-- jQuery library -->
    <!-- <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script> -->

    <!-- Tether -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>

</html>
