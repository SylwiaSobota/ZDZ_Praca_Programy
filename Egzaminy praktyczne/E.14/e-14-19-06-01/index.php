<?php 
$polaczenie = mysqli_connect('localhost', 'root', '', 'sklep');

?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Sklep papierniczy</title>
    <style> @import url('styl.css')</style>
    </head>
    <body>
        <section class="baner">
            <h1>W naszym sklepie internetowym kupisz najtaniej</h1>
        </section>
        <section class="lewy">
            <h3>Promocja 15% obejmuje artykuły:</h3>
            <ul>
                <!-- skrypt1 -->
                <?php
                $zapyt1 = mysqli_query($polaczenie,'SELECT nazwa FROM towary WHERE promocja=1');
                $ilosc = mysqli_num_rows($zapyt1);
                for($i = 0; $i<$ilosc; $i++) 
                {
                    $wynik_zapyt1 = mysqli_fetch_array($zapyt1);
                    echo "<li>".$wynik_zapyt1['nazwa']."</li> ";
                }
                ?>
                
            </ul>
        </section>
        <section class="srodkowy"> 
             
            <h3>Cena wybranego artykułu w promocji</h3>                
                <form action="" method="post">
            <select name="promocja">
                <option value="Gumka do mazania">Gumka do mazania</option>
                <option value="Cienkopis">Cienkopis</option>
                <option value="Pisaki 60 szt.">Pisaki 60 szt</option>
                <option value="Markery 4 szt.">Markery 4szt</option>
            </select>
        <input type="submit" value="WYBIERZ" />
        </form>
            <?php
 
            if(isset($_POST["promocja"])) {
                $wybor = $_POST["promocja"];
                echo $wybor;
                $cena = mysqli_query($polaczenie, 'SELECT cena FROM towary WHERE nazwa=".$wybor."');
                $wyswietl = mysqli_fetch_array($cena);
                while ($wyswietl)
                    echo $wyswietl;
                //echo $cena;
                
            }
            ?>
            </section>
        
        <section class="prawy"> 
            <h3>Kontakt</h3>
            <p>telefon: 123123123 <br>
                e-mail: <a href="mailto:bok@sklep.pl">bok@sklep.pl</a></p>
            <img src="promocja.png" alt="promocja" width="200px" height="180px">
        </section>
        <footer>
            <h4> Autor strony: 1234567891011</h4>
        </footer>
    </body>
</html>