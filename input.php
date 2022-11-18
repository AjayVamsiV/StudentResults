<!DOCTYPE html>
<html>
<body>

<h1>Enter Register number</h1>

<form action="interface.php" target="_blank" method = "post" enctype="multipart/form-data">
  <!--<label for="filename">Select a file:</label>-->
  <input type="text" name="register" value = ""><br><br>
  <select name="Semester" id="Semester">
    <option value="all">All</option>
    <option value="I B.TECH I Sem">I I</option>
    <option value="I B.TECH II Sem">I II</option>
    <option value="II B.TECH I Sem">II I</option>
    <option value="II B.TECH II Sem">II II</option>
    <option value="III B.TECH I Sem">III I</option>
    <option value="III B.TECH II Sem">III II</option>
    <option value="IV B.TECH I Sem">IV I</option>
    <option value="IV B.TECH II Sem">IV II</option>
    </select>
  <button type="submit" name="submit">UPLOAD</button>
</form>
    
</body>
</html>