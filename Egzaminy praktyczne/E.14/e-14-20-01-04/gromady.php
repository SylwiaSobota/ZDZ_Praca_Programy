<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Gromady kręgowców</title>
        <style>@import url(" style12.css");</style>

    </head>
    <body>
        <div id="menu">
            <a href="gromada-ryby.html">gromada ryb</a>
            <a href="gromada-ptaki.html">gromada ptaków</a>
            <a href="gromada-ssaki.html">gromada ssaków</a>
        </div>
        <div id="logo">
            <h2>GROMADY KRĘGOWCÓW</h2>
        </div>
        <div id="lewy">
            <!--skrypt 1 -->
            <?php
            $polacz = mysqli_connect("localhost", "root", "", "baza"); //połączenie z bazą danych
            $zapyt = mysqli_query($polacz,"SELECT id, Gromady_id, gatunek, wystepowanie FROM zwierzeta WHERE Gromady_id = 4 OR Gromady_id = 5;"); //wysłanie zapytania do bazy danych
            $ile = mysqli_num_rows($zapyt);//przechowywanie informacji o liczbie zwróconych wierszy
            for ($i=0; $i<$ile; $i++)
            {
                $r = mysqli_fetch_array($zapyt); //tablica z wartościami zwróconymi z sql, mamy możliwość wypisannia danych w HTML
                echo "<p>".$r['id'].". ".$r['gatunek']."</p>"; //pobranie zawartości z tabeli $r posiadającej informacje z wysłanego zapytania
                if($r['Gromady_id']==4)//warunek pozwala na wypisanie prawidłowego gatunku w zalezności od ID pobranego z bazy. Informacja ta jest w obrazie 1 (patrz baza danych)
                {
                    echo "<p>Występowanie: ".$r['wystepowanie'].", gromada: ptaki<hr>";
                }
                else{
                    echo "<p>Występowanie: ".$r['wystepowanie'].", gromada: ssaki<hr>";
                }

            }

?>
        </div>
        <div id="prawy">
            <h1>Ptaki</h1>
            <ol>
                <!--skrypt 2-->
                <?php
                $zapyt2 = mysqli_query($polacz, "SELECT gatunek, obraz FROM zwierzeta WHERE Gromady_id=4;");
                $ile2 = mysqli_num_rows($zapyt2);
                for ($j=0; $j<$ile2; $j++)
                {
                    $r2 = mysqli_fetch_array($zapyt2);
                    echo "<li><a href='".$r2['obraz']."'>".$r2['gatunek']."</a></li>";
                }
/*pętla for pzowala na wypisanie w punktach elementów listy. 
W zadaniu należało gatunrk przedstawić jako odnośnik do obrazu.
najpierw trzeba zdefiniować element listy, następnie otworzyć odnośnik.
Element do jakiego się odnosimy jest zapisany w bazie danych jako obraz.
W tym celu należy użyć apostrofu, żeby zadziałał jako źródło w HTML. 
Po zamknięciu znacznika znakiem > należy podać tekst jaki powoduje przeniesienie do obrazu. 
Jest to również zapisane w bazie danych jako gatunek. 
Na samym końcu należy zamknąć wszystkie otwarte znacnziki
*/
?>
            </ol>
            <img src="sroka.jpg" alt="sroka zwyczajna, gromada ptaki">
        </div>
        <footer>Stronę o kręgowcach przygotował: Sobota</footer>
    </body>
</html>