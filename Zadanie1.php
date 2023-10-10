<?PHP

$serwer= "localhost";
$uzytkownik= "root";
$haslo= "";
$baza= "ptaki";
$connection= new mysqli($serwer,$uzytkownik,$haslo,$baza);

$zapytanie="SELECT nazwa_zwyczajowa FROM gatunki ORDER BY nazwa_zwyczajowa";
if($wynik=$connection->query($zapytanie))
WHILE($row=$wynik->fetch_array())
echo $row["nazwa_zwyczajowa"]."<br>";

else
echo $connection->errno." ".$connection->error;

$connection->close;

?>
