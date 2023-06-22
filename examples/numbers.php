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

echo var_dump(is_float(5));

// 5 ondalıklı bir değişken mi diye sorduk var dump ile false çıkan sonucu ekran yazdırdır.




?>
