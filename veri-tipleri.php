<!-- 
    Php Veri Tipleri

    string   : Metinsel bilgiler
    int      : tam sayılar
    double /float  : ondalıklı sayılar 
    boolean  : true / false bilgi 
    object   : nesne
    array    : dizi
    null     : değer içermeyen bilgi 

 -->

<?php

$urunadi = "Iphone 15";
echo $urunadi . ' : ' . gettype($urunadi);

echo "<br>";

$fiyat = 75000;
echo $fiyat . ' : ' . gettype($fiyat);

echo "<br>";

$kdvorani = 0.18;
echo $kdvorani . ' : ' . gettype($kdvorani);

echo "<br>";

$satistaMi = false;
echo gettype($satistaMi);

echo "<br>";

// Bir değişkenin Türünü Aşağıdaki Yöntemle Değiştirebiliriz.

$a = (float)20;
echo gettype($a);
echo $a . '.' . gettype($a);

// Burda bir tam sayı değişken türünü ondalıklı değişken türüne döndürdük

echo "<br>";

$a = (int)20.5;
echo $a . '.' . gettype($a);

// Burda bir ondalıklı sayı değişken türünü tamsayı değişken türüne döndürdük.

echo "<br>";

$a = (int)"20";
echo $a . '.' . gettype($a);

// Burda 20'nin sayı olduğunu tırnak kullanılmasına rağmen anlar çünkü int diyebelirttik.
echo "<br>";

$a = "20";
echo $a . '.' . gettype($a);

// Burda 20'nin sayı olduğunu tırnak kullanılması sebebiye anlamaz ve string ifade olarak algılar.



?>