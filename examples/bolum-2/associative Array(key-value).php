<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>associative Array(key-value)</title>
</head>

<body>
    <?php
    // Diziler (Array)

    // 1 - Numeric Arrays
    // 2 - Associative Arrays (key-value)

    //  key-value => 34: istanbul, 53: Rize
    // "ali" => "053171924878"


    $plakalar = array("41", "53", "34", "62");
    $sehirler = array("kocaeli", "rize", "istanbul", "dersim");

    echo "$plakalar[0] : $sehirler[0]<br> ";
    echo "$plakalar[3] : $sehirler[3] ";


    $plaka_bilgileri = array("41" => "kocaeli", "53" => "rize", "34" => "istanbul", "62" => "dersim");


    echo "<br>";
    echo $plaka_bilgileri["41"] . "<br> ";
    echo $plaka_bilgileri["53"] . "<br> ";
    ?>
</body>

</html>