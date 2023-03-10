var a = parseInt(prompt("Podaj a: "));
var b = parseInt(prompt("Podaj b: "));
var c = parseInt(prompt("Podaj c: "));

var delta = b * b - 4 * a * c;

if (delta > 0 )
{
    var x1 = ((-b) - Math.sqrt(delta)) / 2 * a;
    var x2 = ((-b) + Math.sqrt(delta)) / 2 * a;
    document.write("Funkcja posiada 2 pierwiastki <br> x1 = " + x1 +"<br> x2 = " + x2);
} 
else if (delta==0)
{
    x0 = (-b) / 2 * a;
    document.write("Funkcja posiada jeden pierwiastek x0= " + x0); 
}
else 
{
    document.write("Brak miejsc zerowych");
}


Napisz skrypt, który po podaniu nr dnia tygodnia wyświetli jego nazwę polską i angielską