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
 <?php
$servername = "192.168.0.4";
$username = "ILung";
$password = "hannahmontana";
$dbname = "ILung";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT 21_CURSA.cod_cursa,21_CURSA.data_cursei,21_CURSA.locatie FROM 21_CURSA;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row

    while($row = mysqli_fetch_assoc($result)) {

        echo "cod_cursa: " . $row["cod_cursa"]. " - data_cursei: " . $row["data_cursei"]. " " . " - locatie: ". $row["locatie"] . "<br>";

    }

} else {

    echo "0 results";

}

mysqli_close($conn);

?>
</body>

</html>