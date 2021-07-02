--odpowiedzi dotyczace baz danych
--zadanie1
 SELECT nazwa FROM towary WHERE promocja=1
--zadanie2
 SELECT cena FROM towary WHERE nazwa='cienkopis' 
--zadanie3
SELECT dostawcy.nazwa, COUNT(towary.nazwa) FROM dostawcy INNER JOIN towary ON dostawcy.id=towary.idDostawcy GROUP BY dostawcy.nazwa
--zadanie4
ALTER TABLE dostawcy ADD e_mail TEXT
