<?PHP
//phpinfo();
echo "Klasa 2E łączenie z bazą danych MYSQL"."<br>"."<br>";

$serwer= "localhost";
$uzytkownik= "root";
$haslo= "";
$baza= "przepisyPrzyklad";
$connection= new mysqli($serwer,$uzytkownik,$haslo,$baza);

$zapytanie="SELECT NazwaPrzepisu FROM przepisy ORDER BY NazwaPrzepisu DESC";
if($wynik=$connection->query($zapytanie))
WHILE($row=$wynik->fetch_array())
//fetch_array - tablica skojarzona
echo $row["NazwaPrzepisu"]."<br>";

else
echo $connection->errno." ".$connection->error;

$connection->close();

?>
