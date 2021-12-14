--Zapytanie 1
SELECT id, nr_rejsu, czas, kierunek, status_lotu from odloty ORDER BY czas DESC
--Zadanie 2
SELECT MIN(czas) FROM odloty WHERE czas BETWEEN '10:10' AND '10:19'
--Zadanie 3
