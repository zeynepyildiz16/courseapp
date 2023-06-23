<?php

// Diziler (Array)

// 1-Numeric Array

$renk1 ="Kırmızı";
$renk2 = "Yeşil";
$renk3 = "Sarı";

// $renkler = "Kırmızı,Mavi,Sarı";

$renkler = array("Kırmızı","Yeşil","Sarı");

echo gettype($renkler)."<br>";
echo $renkler[0]."<br>";
echo $renkler[1]."<br>";
echo $renkler[2]."<br>";


echo "<br>";
$sayilar = array (43,23,25,6,14,87);
echo $sayilar[2]."<br>";
echo $sayilar[5];

// 2-Associative Array (key-value)
