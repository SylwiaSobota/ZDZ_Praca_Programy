<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Klub wędkowania</title>
        <style>
            @import url("styl2.css");
        </style>
    </head>
    <body>
        <div id="baner">
            <h2>Wędkuj z nami</h2>
        </div>
        <div id="lewy">
            <img src="./ryba2.jpg" alt="Szczupak">
        </div>
        <div id="prawy">
            <h3>Ryby spokojnego żeru (białe)</h3>
            <?php
            $polacz = mysqli_connect('localhost', 'root', '', 'wedkowanie2');
            $sql = "SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia=2;";
            $zapyt = mysqli_query($polacz, $sql);
            $ile = mysqli_num_rows($zapyt);
            for ($i=0; $i<$ile; $i++)
            {
                $r = mysqli_fetch_array($zapyt);
                echo $r['id'].".".$r['nazwa'].", występuje w: ".$r['wystepowanie']."<br>";
            }
            mysqli_close($polacz);
            ?>
            <ol>
                <li><a href="https://wedkuje.pl/" target="_blank">Odwiedź także</a></li>
                <li><a href="http://www.pzw.org.pl/" target="_blank">Polski Związek Wędkarski</a></li>
            </ol>
        </div>
        <footer>
            <p> Stronę wykonał: Sylwia Sobota </p>
        </footer>
    </body>
</html>