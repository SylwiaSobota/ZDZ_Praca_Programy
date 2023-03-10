<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Organizer</title>
        <style>@import url('styl6.css'); </style>
    </head>
    <body>
        <div id="baner1">
            <h2>MÓJ ORGANIZER</h2>
        </div>
        <div id="baner2">
            <form action="organizer.php" method="POST">
                <label>Wpis wydarzenia <input type="text" name="wpis"></label>
                <input type="submit" value="Zapisz">
            </form>
            <?php
            $polacz = mysqli_connect("localhost", "root","", "egzamin6");
            if (array_key_exists('wpis', $_POST))
            {
                $wpis = $_POST['wpis'];
                $sql = "UPDATE zadania SET wpis='".$wpis."' WHERE dataZadania='2020-08-27'";
                mysqli_query($polacz, $sql);
            }
            ?>
        </div>
        <div id="baner3">
            <img src="logo2.png" alt="mój organizer">
        </div>
        <div id="glowny">
            <?php
            $sql1 = "SELECT dataZadania, miesiac, wpis FROM zadania WHERE miesiac = 'sierpien';";
            $dane = mysqli_query($polacz, $sql1);
            for($i=0; $i<mysqli_num_rows($dane);$i++)
            {
                $r = mysqli_fetch_array($dane);
                echo "<div class='dzien'><h6>".$r['dataZadania'].", ".$r['miesiac']."</h6><p>".$r['wpis']."</p></div>";
            }


?>
        </div>
        <footer>
            <?php
            $sql2 = "SELECT miesiac, rok FROM zadania WHERE dataZadania = '2020-08-01'";
            $dane2 = mysqli_query($polacz, $sql2);

            $r = mysqli_fetch_array($dane2);
            echo "<h1>miesiąc: ".$r['miesiac'].", rok: ".$r['rok']."</h1>";
            mysqli_close($polacz);

            ?>
        <p>Stronę wykonał: 000000000</p>
        </footer>
    </body>
</html>