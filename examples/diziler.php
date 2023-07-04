<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>diziler</title>
</head>

<body>
    <?php

    // Diziler (Array)

    // 1-Numeric Array

    $renk1 = "Kırmızı";
    $renk2 = "Yeşil";
    $renk3 = "Sari";

    // $renkler = "Kırmızı,Mavi,Sarı";

    $renkler = array("Kırmızı", "Yeşil", "Sari");

    echo gettype($renkler) . "<br>";
    // gettype kullanarak renkler dizisinin type bilgisine baktık burda.
    echo $renkler[0] . "<br>";
    echo $renkler[1] . "<br>";
    echo $renkler[2] . "<br>";


    echo "<br>";
    $sayilar = array(43, 23, 25, 6, 14, 87);
    echo $sayilar[2] . "<br>";
    echo $sayilar[5];

    // 2-Associative Array (key-value)
    ?>

</body>

</html>