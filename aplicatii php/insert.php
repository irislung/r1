<!DOCTYPE html>
<html>
<head>
<style>

header {
    padding: 1em;
    color: black;
    background-color: bisque;
    clear: left;
    text-align: center;
	
	
}
div {
	background-color:bisque;
	border:5px solid black;
	width:1000px;
	allign:center;
	margin-top: 100px;
  margin-bottom: 100px;
  margin-right: 500px;
  margin-left: 350px;
  text-align:left;
}
.button {
  background-color: white;
  border: 1px solid black;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

</style>
</head>
<center>
<body>

<div>
<header>
   <h1>Subiectul 21 atestat</h1>
</header>
<p>Introduceti date in tabel </p>
<center>
<form action="" method="post">
<input type="text" name="cod_cursa" ><br>
<input type="text" name="destinatie"><br>
<input type="date" name="data_cursei"><br>
<input type="text" name="locatie"><br>
<input type="submit" value="Trimite">
</body></center>
</center>
<?php
$servername = "192.168.0.4";
$username = "ILung";
$password = "hannahmontana";
$dbname = "ILung";
$conn = new mysqli($servername, $username, $password, $dbname);
$cod_cursa=$_POST['cod_cursa'];
$destinatie=$_POST['destinatie'];
$data_cursei=$_POST['data_cursei'];
$locatie=$_POST['locatie'];
if(isset($_POST["cod_cursa"]))
	echo $cod_cursa."<br>";
if(isset($_POST["destinatie"]))
	echo $destinatie."<br>";
if(isset($_POST["data_cursei"]))
	echo $data_cursei."<br>";
if(isset($_POST["locatie"]))
	echo $locatie."<br>";
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql="insert into 21_CURSA (cod_cursa,destinatie,data_cursei,locatie) values('$cod_cursa','$destinatie','$data_cursei','$locatie')";
$result = $conn->query($sql);
if ($result == TRUE)
{
    echo "Succes!";
}
else
{
    echo $conn->error;
}
$conn->close();
?>
</html>

