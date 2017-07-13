<!DOCTYPE html>
<html>
<head>
  <title>Upload CSV</title>
</head>
<body>
  <form action="/csv/upload" method="POST" enctype="multipart/form-data">
    Select File:
    <input type="file" name="file" />
    <input type="submit" value="Upload" />
  </form>
</body>
</html>
