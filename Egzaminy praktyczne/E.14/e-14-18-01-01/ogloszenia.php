<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <link rel="stylesheet" type="text/css" href="styl1.css">
            <title>Portal ogłoszeniowy</title>
        </head>
        <body>
            <div class="baner"><h1>Portal Ogłoszeniowy</h1> </div>
            <div class="lewy">
              <h2>Kategorie ogłoszeń</h2>
                <ol>
                    <li>Książki</li>
                    <li>Muzyka</li>
                    <li>Filmy</li>
                </ol>
                <img src="ksiazki.jpg" alt="Kupie / sprzedam książkę" width="200px" height="300px">
                <table>
                    <tr><td>Lista ogłoszeń</td><td>Cena ogłoszeń</td><td>Bonus</td></tr>
                    <tr><td>1-10</td><td>1PLN</td><td rowspan="3">Subskrypcja newslettera to upusy 0,20 PLN na ogłoszenie</td></tr>
                    <tr><td>11-50</td><td>0,80PLN</td></tr>
                    <tr><td> 51 i więcej</td><td>0,60PLN</td></tr>
                </table>
            </div>
            <div class="prawy">
                <h2>Ogłoszenia kategorii książki</h2>
                <?php
                $con=mysqli_connect('localhost', 'root', '', 'ogloszenia');
                $zapytanie1='SELECT id, tytul, tresc FROM ogloszenie WHERE kategoria = 1';
                $wynik = mysqli_query($con,$zapytanie1);
                $zapytanie2 = 'SELECT telefon FROM uzytkownik, ogloszenie WHERE ogloszenie.uzytkownik_id = uzytkownik.id';
                $wynik2=mysqli_query($con,$zapytanie2);
                while ($wiersz = mysqli_fetch_row($wynik))
                {
                    $wiersz1=mysqli_fetch_row($wynik2);
                    echo "<h3>".$wiersz[0]." ".$wiersz[1]."</h3>";
                    echo "<p>".$wiersz[2]."</p>";
                    echo "<p>Telefon kontaktowy: ".$wiersz1[0]."</p>";
                }
                mysqli_close($con);
                
                
                
                
                ?>                
            </div>
            <section class="stopka">
            <footer>Portal ogłoszeniowy opracował: xyz </footer></section>
        </body>
    </html>