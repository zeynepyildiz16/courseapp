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
    echo "<br>" . "<br>";
    //Öğrenci C

    $ogrenciC = array(
        "100" => array(
            "ad" => "Mehmet",
            "soyad" => "Yıldız",
            "notlar" => array(
                "matematik" => array(50, 70, 84),
                "fizik" => array(40, 25, 65),
                "kimya" => array(64, 78, 58),

            )

        ),
        "200" => array(
            "ad" => "Hasan",
            "soyad" => "Tahsin",
            "notlar" => array(
                "matematik" => array(45, 100, 70),
                "fizik" => array(40, 60, 70),
                "kimya" => array(72, 60, 68),
            )
        )

    );
    echo $ogrenciC["100"]["ad"] . "<br>";
    echo $ogrenciC["100"]["soyad"] . "<br>";
    echo $ogrenciC["100"]["notlar"] . "<br>";

    ?>
</body>

</html>