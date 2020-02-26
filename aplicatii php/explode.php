<html>
<head></head>
<body>
<h1>Introducere n valori</h1>
<form action="" method="POST">
Introducere nr separate prin spatiu <br>
<input type="text" name="sir_nr" value="maxlenght=100"<br>
<input type="submit" value="trimite"><br>
</form>
<?php 
if(isset($_POST["sir_nr"]))
{$sir=$_POST["sir_nr"];
echo "SIRUL DE NUMERE:".$nr."<br>";
$a=explode(" ",$sir);
$n=count($a);
$s=0;
for($i=0;$i<$n;$i++)
	$s=$s+$a.[$i];
echo "suma numerelor=".$s;
?>
</body>
</html>
