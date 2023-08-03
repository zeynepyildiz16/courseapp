<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $ogrenciA =array("Ahmet Yılmaz",array(50,80,70,));
    $ogrenciB =array("Mehmet Yılmaz",array(60,50,90,));
    echo $ogrenciA[0]."<br>";
    echo $ogrenciA[1][0]."<br>";
    echo $ogrenciA[1][1]."<br>";
    echo $ogrenciA[1][2]."<br>";



    echo $ogrenciB[0]."<br>";
    echo $ogrenciB[1][0]."<br>";
    echo $ogrenciB[1][1]."<br>";
    echo $ogrenciB[1][2]."<br>";
    ?>
</body>
</html>