<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file upload form</title>
</head>
<body>
    <form action="uploadmanager.php" method="post" enctype="multipart/form-data">
    <h2>Upload File</h2>
    <fieldset>
      <legend>Upload file</legend>
      <label for="fileselect">FileName: </label>
      <input type="file" name="photo" id="fileselect">
      <input type="submit" value="Upload" name="submit">
    </fieldset>
    </form>
</body>
</html>