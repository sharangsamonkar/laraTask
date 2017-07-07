<!DOCTYPE html>
<html lang = "en">

  <head>
    <title>User Profiles</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>

  <body>
    <div class="comtainer-fluid">
      <div class="col-6">
        <table class="table table-hover">
          <tr>
            <td>ID: </td>
            <td>{{$ud->id}}</td>
          </tr>
          <tr>
            <td>Name: </td>
            <td>{{$udp->name}}</td>
          </tr>
          <tr>
            <td>Age: </td>
            <td>{{$udp->age}}</td>
          </tr>
          <tr>
            <td>DOB: </td>
            <td>{{$udp->dob}}</td>
          </tr>
          <tr>
            <td>Country: </td>
            <td>{{$udp->country}}</td>
          </tr>
          <tr>
            <td>Email: </td>
            <td>{{$ud->email}}</td>
          </tr>
        </table>
      <div>
    </div>


    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

    <!-- Tether -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>

</html>
