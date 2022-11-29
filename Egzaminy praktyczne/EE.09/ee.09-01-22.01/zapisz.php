<?php
$imie = $_POST['imie'];
$nazwisko = $_POST['nazwisko'];
$adres = $_POST['adres'];

$polacz = mysqli_connect('localhost', 'root', '', 'wedkowanie');
mysqli_query($polacz, 'INSERT INTO karty_wedkarskie (imie, nazwisko, adres, data_zezwolenia, punkty) VALUES ("'.$imie.'", "'.$nazwisko.'", "'.$adres.'", null, null);');

echo "Rekord został dodany poprawnie";

?>