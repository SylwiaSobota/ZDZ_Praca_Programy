function operacje(){
var a = parseFloat(document.getElementById("liczA").value)
var b = parseFloat(document.getElementById("liczB").value)
var dzialanie = document.getElementById("dzialanie").value
var wynik = 0

if (dzialanie == "suma")
{
    wynik = a+b
    document.write(`Suma wynosi ${wynik}`)
}
else 
{
    alert("brak dzialan")
}
}