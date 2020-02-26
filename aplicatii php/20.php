<!DOCTYPE html>
<html>
<head></head>
<body>
<form action="insert.php " method="post">
<table style="width:100%">
  <tr>
    <td>CNP</th>
    <td><input type="int" name="CNP"><br></th> 
   
  </tr>
  <tr>
    <td>Nume</td>
    <td><input type="text" name="Nume"><br><br></td>
   
  </tr>
  <tr>
    <td>Prenume</td>
    <td><input type="text" name="Prenume"><br></th>
   
  </tr>
  <tr>
    <td>Localitate</td>
    <td><input type="text" name="Localitate"><br></td>
   
  </tr>
  <tr>
  <td><input type="submit"value="trimite"></td>
  <td><input type="reset" value="sterge"></td>
  </tr>
  
</table>

</body>
</html>
</form>
<?php 
echo $_POST["CNP"]."<br>";
echo $_POST["Nume"]."<br>";
echo $_POST["Prenume"]."<br>";
echo $_POST["Localitate"];
?>
