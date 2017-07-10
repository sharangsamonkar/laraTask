<!DOCTYPE html>
<html lang = "en">

  <head>
    <title>User Profiles</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>

  <body>
    <div class="container-fluid">
      <form action="/user_profiles" method="post">
        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
        <table class="table">
          <tr>
            <td>ID: </td>
            <td><input type="text" name="id"/></td>
          </tr>
          <tr>
            <td>Email: </td>
            <td><input type="text" name="email"/></td>
          </tr>
          <tr>
            <td>Password: </td>
            <td><input type="text" name="password"/></td>
          </tr>
          <tr>
            <td>Name: </td>
            <td><input type="text" name="name"/></td>
          </tr>
          <tr>
            <td>DOB: </td>
            <td><input type="date" name="dob"/></td>
          </tr>
          <tr>
            <td>Country: </td>
            <td><input type="text" name="country"/></td>
          </tr>
          <tr>
            <td colspan="2"><input type="submit" value="submit" /></td>
          </tr>
        </table>
      </form>
    </div>

    <!-- jQuery library -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

    <!-- Tether -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>

</html>
