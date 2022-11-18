<!DOCTYPE html>
<html>
<body>

<h1>Show File-select Fields</h1>

<h3>Show a file-select field which allows only one file to be chosen:</h3>
<form action="new.php" method = "post" enctype="multipart/form-data">
  <!--<label for="filename">Select a file:</label>-->
  <input type="file" name="file"><br><br>
  <button type="submit" name="submit">UPLOAD</button>
</form>
    
</body>
</html>