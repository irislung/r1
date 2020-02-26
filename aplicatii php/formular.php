<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align:center;
}
</style>
<body>
<form action=" " method="post">
<table style="width:100%">
  <tr>
    <td>Nume Prenume</th>
    <td><input type="text" name="numeprenume"><br></th> 
   
  </tr>
  <tr>
    <td>Sex</td>
    <td>Feminin<input type="radio"name="sex" value="feminin">
		Masculin<input type="radio"name="sex" value="masculin"<br><br></td>
   
  </tr>
  <tr>
    <td>Studii</td>
    <td><select name="studiu">
	 		<option gimnaziale</option><br>
            gimnaziale<option gimnaziale</option><br><br>
			medii<option medii</option><br>
			superioare<option superioare</option><br>
			postuniversitare<option postuniversitare</option>
            </select><br></td>
   
  </tr>
  <tr>
    <td>CV</td>
    <td><input type="text" name="CV"><br></td>
   
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
echo $_POST["numeprenume"]."<br>";
echo $_POST["sex"]."<br>";
echo $_POST["studiu"]."<br>";
echo $_POST["CV"];
?>
