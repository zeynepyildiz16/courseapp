<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>degisken nedir</title>
</head>

<body>
    <?php



    $maasAli = 19900;
    $maasAren = 20000;
    $maasAras = 21000;


    $vergiorani1 = 0.27;
    $vergiorani2 = 0.35;

    echo $maasAli - ($maasAli * $vergiorani2); //Ali maaş
    echo "<br>";
    echo $maasAren - ($maasAren * $vergiorani2); //Aren maaş
    echo "<br>";
    echo $maasAras - ($maasAras * $vergiorani1); //Aras maaş 
    ?>
</body>

</html>