--Zapytanie 1
INSERT INTO uzytkownik(imie, nazwisko, telefon, email) VALUES ('Jolanta', 'Jasny', '600600600', 'jolanta@poczta.pl');
--Zapytanie 2
SELECT tytul, tresc, podkategoria FROM ogloszenie WHERE ogloszenie.uzytkownik_id=1 AND ogloszenie.kategoria=1
--Zapytanie 3
CREATE USER 'jolanta'@'localhost' IDENTIFIED BY 'jol1@'
--Zapytanie 4
GRANT SELECT, UPDATE ON uzytkownik TO 'jolanta'@'localhost'
