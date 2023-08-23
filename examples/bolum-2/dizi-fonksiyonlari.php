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




    $plakalar = array("53" => "rize", "62" => "dersim", "34" => "istanbul", "41" => "kocaeli");





    array_push($notlar, 100);
    //Diziye yeni bir elemanı Sona eklemek istediğimiz zaman Array_push fonksiyonunu kullandık.




    array_unshift($notlar, 22);
    // Diziye yeni bir elemanı Başa eklemek istediğimiz zaman Array_unshift fonksiyonunu kullandık.



    //array_pop($plakalar);
    // Dizinin sonundan eleman silme 


    // array_shift($plakalar);
    // Dizinin başından eleman silme 






    // SORT ARTAN SIRALAMA işlemini yapar
    sort($notlar);
    asort($plakalar); //value alfabe sıralaması.
    ksort($plakalar); //key bilgisine (yani numara) bilgisine göre sıralama.



    // ARSORT AZALAN SIRALAMA işlemini yapar
    rsort($notlar);
    arsort($plakalar); //value
    krsort($plakalar); //key



    echo count($notlar) . "<br>";
    echo count($plakalar) . "<br>";
    // Dizi elemanlarının sayısını count (say) ile bulduk. 



    print_r($notlar) . "<br>";
    echo "<br>" . "<br>";
    print_r($plakalar) . "<br>" . "<br>";
    // Dizinin tamamını print_r fonksiyonu ile  yazdırdık.

    echo "<br>" . "<br>";



    // String bir bilgiyi diziye(array) çevirmek
    $str = "kocaeli,41";
    $arr = explode(",", $str);
    print_r($arr);


    // array  bir bilgiyi stringe çevirmek
    echo "<br>" . "<br>";
    $arr = array("zeynepyildizbursa", "@gmail.com");
    $str = implode("", $arr);

    print_r($arr);
    echo $str;


    echo "<br>" . "<br>";




    // Bir dizide geçen elemanların kaç kere tekrar ettiğini array_count_values ile buluruz.
    $paralar = array("47", "102", "11", "11", "46");
    print_r(array_count_values($paralar));



    echo "<br>" . "<br>";


    // Bir dizide geçen elemanların array ve key değerlerinin yerlerini değiştirir array_flip .
    print_r(array_flip($plakalar));



    echo "<br>" . "<br>";
    // Bir dizide geçen elemanlardan birini rastgele getirir array_rand.
    $indexes = array_rand($notlar, 2);
    print_r($indexes);
    echo "<br>" . "<br>";
    echo $notlar[$indexes[0]];
    echo "<br>" . "<br>";
    echo $notlar[$indexes[1]];
    // Eleman sayısına göre rastgele konumlar için bana bulduğu rastgele elemanların index numarasıyla verir.




    //w3scools.com da zaten tüm dizi fonksiyonları var (Php Array altında)


    ?>
</body>

</html>