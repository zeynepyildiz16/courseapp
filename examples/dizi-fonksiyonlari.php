<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    // Array Functions

    $notlar = array(60, 70, 40, 80);




    $plakalar = array("41" => "kocaeli", "34" => "istanbul", "35" => "izmir");
    echo "<br>";



    // Dizi elemanlarının sayısını count (say) ile bulduk. 
    // Diziye yeni bir eleman eklemek istediğimiz zaman array_push fonksiyonunu kullandık

    array_push($notlar, 100);
    echo count($notlar) . "<br>";
    echo count($plakalar) . "<br>";

    print_r($notlar) . "<br>";
    echo "<br>";
    print_r($plakalar) . "<br>";




    ?>
</body>

</html>