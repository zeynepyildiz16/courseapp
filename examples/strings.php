<?php


$ad="Aras";
$soyad = "AKINCI";
$yas= 7;


// $mesaj="Benim adım ".$ad.' '.$soyad." ve ".$yas." yaşındayım.";

$mesaj ="Benim adım {$ad} {$soyad} ve {$yas} yaşındayım.";


echo $mesaj."<br>";
echo $mesaj[0]."<br>"; //M bu dizinin 0. elemanıdır.

?>