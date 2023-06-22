<?php

echo "sonuç :".(5+3)."<br>";
echo "sonuç :".(5-3)."<br>";
echo "sonuç :".(5*3)."<br>";
echo "sonuç :".(5/3)."<br>"."<br>";


echo "********************"."<br>"."<br>";


// Yada veri atayabilirsiniz.

$sayi1=5;
$sayi2=3;

echo "sonuç :".($sayi1 + $sayi2 )."<br>";
echo "sonuç :".($sayi1 - $sayi2)."<br>";
echo "sonuç :".($sayi1 * $sayi2)."<br>";
echo "sonuç :".($sayi1 / $sayi2)."<br>";


$sayi3=8;

echo "sonuç :".(($sayi1+$sayi2)/$sayi3)."<br>"."<br>";

echo "********************"."<br>"."<br>";
echo is_int(5)."<br>"; //Burda 5 bir sayı mıdır diye sorruyoruz eğer doğruysa (true yani 1 döndürecek ekrana)
echo is_int("beş")."<br>"; 


// Eğer direkt true mu değil mi görmek istiyorsak var_dump fonksiyonunu kullanabiliriz.
echo var_dump(is_float(5))."<br>";
// 5 ondalıklı bir değişken mi diye sorduk var dump ile false çıkan sonucu ekran yazdırdır.

echo var_dump(is_float(5.2))."<br>";
// 5.2 ondalıklı bir değişken mi diye sorduk var dump ile true çıkan sonucu ekran yazdırdır.

echo var_dump(is_numeric("a5"))."<br>";
// Bu bir sayı mıdır diye sorduk

echo abs (-5)."<br>"; 
// Burda abs fonksiyonunu kullanark -5 olsa bile değer pozitif yansıttık.Mutlak değer için kullanılan fonksiyondur.



echo floor(7.3)."<br>";
// Burda floor  fonksiyonunu kullanark 7.3 ü aşağıya yuvarladık.floor un mantığı daime aşağıya yuvarlamasıdır.


echo ceil(7.3)."<br>";
// Burda ceil  fonksiyonunu kullanark 7.3 ü yukarıya yuvarladık.Ceil in mantığı daime yukarıya yuvarlamasıdır.



echo round(7.3)."<br>";
echo round(7.8)."<br>";
//round un mantığı daime en yakın sayıya yuvarlamasıdır.


echo sqrt(25)."<br>";
//Kendisine geçirilen parametre değerinin karekökünü hesaplar.

echo pow(5,2)."<br>";
// Burda üst hesaplama için pow kullandık ve 5 üzeri 2 yi hesapladık.

echo max(3,57,45,82,41)."<br>";
// Burda sayılar arasında maksimum değeri max fonksiyonu ile bulduk.

echo min(3,57,45,82,41)."<br>";
// Burda sayılar arasında minumum değeri min fonksiyonu ile bulduk.

?>
