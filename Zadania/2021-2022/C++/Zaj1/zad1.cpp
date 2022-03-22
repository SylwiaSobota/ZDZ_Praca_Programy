#include <iostream>

using namespace std;

int main()
{
    char imie, nazwisko;//deklaracja zmiennych tekstowych/znakowych
    int wiek; //deklaracja zmiennej całkowitej
    cout<<"Podaj imie:"<<endl;//wypisywanie tekstu
    cin>>imie; //podawanie danych i zapisywanie na zmiennych
    cout<<"Podaj nazwisko:"<<endl;
    cin>>nazwisko;
    cout<<"Podaj wiek: "<<endl;
    cin>>wiek;

    cout<<"Nazywam się: "<<imie<<" "<<nazwisko<<"mam "<<wiek<<" lat."<<endl;

    return 0;
}