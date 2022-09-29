var a = parseInt(prompt("Podaj liczbę a: "));
var b = parseInt(prompt("Podaj liczbę b: "));
var suma = a+b;
for (var i=0; i<suma; i++)
{
    document.write("Witaj<br>");
}
/*napisz skrypt, ktory po podaniu liczby od 1 do 7 wypisze pasujacy do niej dzien tygodnia, np uzytkownik podal liczbe 2 wiec na stronie pojawi się napis wtorek. uzyj switch case. */
switch(a)
{
    case 1:
        document.write("Poniedziałek");
        break;
    case 2:
        document.write("Wtorek");
        break;
    case 3:
        document.write("Środa");
        break;
    case 4:
        document.write("Czwartek");
        break;
    case 5:
        document.write("Piątek");
        break;
    case 6:
        document.write("Sobota");
        break;
    case 7:
        document.write("Niedziela");
        break;
    default:
        document.write("Podana liczba jest z poza zakresu");
}

