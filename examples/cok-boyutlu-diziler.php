<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    //Öğrenci A
    $ogrenciA = array("Ahmet Yılmaz", array(50, 80, 70,));
    $ogrenciB = array("Mehmet Yılmaz", array(90, 68, 64,));
    echo $ogrenciA[0] . "<br>";
    echo $ogrenciA[1][0] . "<br>";
    echo $ogrenciA[1][1] . "<br>";
    echo $ogrenciA[1][2] . "<br>";


    // Öğrencinin A nın not ortalamalarını öğrenmek için
    echo "<br>";
    $ogrenciA_ortalama = ($ogrenciA[1][0] + $ogrenciA[1][1] + $ogrenciA[1][2]) / 3;
    echo $ogrenciA_ortalama . "<br>";
    echo "**********************";
    echo "<br>" . "<br>";
    //Öğrenci B
    echo $ogrenciB[0] . "<br>";
    echo $ogrenciB[1][0] . "<br>";
    echo $ogrenciB[1][1] . "<br>";
    echo $ogrenciB[1][2] . "<br>";

    // Öğrencinin B nın not ortalamalarını öğrenmek için

    $ogrenciB_ortalama = ($ogrenciB[1][0] + $ogrenciB[1][1] + $ogrenciB[1][2]) / 3;
    echo "<br>" . "<br>";
    echo $ogrenciB_ortalama . "<br>";
    echo "**********************";


    ?>
</body>

</html>