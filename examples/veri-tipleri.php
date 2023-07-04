<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>veri-tipleri</title>
</head>

<body>
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
    echo $a . " "  . gettype($a);

    // Burda bir tam sayı değişken türünü ondalıklı değişken türüne döndürdük

    echo "<br>";

    $a = (int)20.5;
    echo $a . " "  . gettype($a);

    // Burda bir ondalıklı sayı değişken türünü tamsayı değişken türüne döndürdük.

    echo "<br>";

    $a = (int)"20";
    echo $a . " "  . gettype($a);

    // Burda 20'nin sayı olduğunu tırnak kullanılmasına rağmen anlar çünkü int diyebelirttik.
    echo "<br>";

    $a = "20";
    echo $a . " "  . gettype($a);

    // Burda 20'nin sayı olduğunu tırnak kullanılması sebebiye anlamaz ve string ifade olarak algılar.

    echo "<br>";

    $a = (int)"a20";
    echo $a . " "  . gettype($a);

    /*
Burda başında a olması onu int olarak algılamasına engel olmaz ancak 
Rakamsal ifadeyi döndüremediği için sıfır basar.
*/

    echo "<br>";

    $a = (int)"20a52";
    echo $a . " "  . gettype($a);

    // Burda da çevirebildiği kısmını çevirir geri kalanını gözardı eder.


    echo "<br>";

    $a = true;
    echo $a . " "  . gettype($a);

    // Burda true nun karşılığı olarak direkt 1 dğerini gösterir

    echo "<br>";

    $a = false;
    echo $a . " " . gettype($a);

    //Ancak falseda bir şey göstermez.

    echo "<br>";

    $a = (int)true;
    echo $a . " "  . gettype($a);

    // Burda true nun int karşılığı da gelecektir.

    echo "<br>";

    $a = (int)false;
    echo $a . " "  . gettype($a);

    // Burda false un int karşılığı da gelecektir.




    ?>
</body>

</html>