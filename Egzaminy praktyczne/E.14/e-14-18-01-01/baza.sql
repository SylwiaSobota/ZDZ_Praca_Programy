--odpowiedzi dotyczace baz danych
--zadanie1
SELECT id, tytul, tresc FROM ogloszenie WHERE kategoria = 1
--zadanie2
SELECT telefon FROM uzytkownik JOIN ogloszenie ON ogloszenie.uzytkownik_id = uzytkownik.id WHERE ogloszenie.id = 1 
--zadanie2 inna wersja
SELECT telefon FROM uzytkownik, ogloszenie WHERE ogloszenie.uzytkownik_id = uzytkownik.id AND ogloszenie.id = 1
--zadanie3
CREATE USER 'moderator'@'localhost' IDENTIFIED BY 'qwerty'
--zadanie4
GRANT SELECT, DELETE ON ogloszenie TO 'moderator'@'localhost'