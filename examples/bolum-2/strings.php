<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>strings</title>
</head>

<body>
    <?php


    $ad = "Aras";
    $soyad = "AKINCI";
    $yas = "eight";


    // $mesaj="Benim adım".$ad.' '.$soyad" ve ".$yas."yaşındayım.";

    $mesaj = "my name is $ad $soyad and $yas years old.";


    echo $mesaj . "<br>";
    echo $mesaj[0] . "<br>"; //M bu dizinin 0. elemanıdır.
    echo $mesaj[3] . "<br>";


    // string Fonksiyonları

    echo strlen($mesaj) . "<br>" . "<br>";
    //karakter sayısını veren fonksiyon strlen


    echo str_word_count($mesaj) . "<br>" . "<br>";
    // Verilen string değerin içinde kaç kelime geçtiğini gösteren fonksiyon str_word_count


    echo strtolower($mesaj) . "<br>" . "<br>";
    // tamamını küçük harfe çevirir.



    echo strtoupper($mesaj) . "<br>" . "<br>";
    // tamamını büyük harfe çevirir.


    echo ucfirst($mesaj) . "<br>";
    // cümlenin baş harfini büyük harfe çevirir.


    echo "<br>";

    echo str_replace(["Aras", "eight"], ["Zarif", "six"], $mesaj) . "<br>";
    // Replace fonksiyonu sayesinde metindeki arasları zarif eightleri six yaptık.



    ?>

</body>

</html>