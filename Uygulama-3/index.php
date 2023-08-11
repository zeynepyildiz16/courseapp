<?php
const title = "Popüler Kurslar";
$kategoriler = array("Programlama", "Web Geliştirme", "Veri Analizi", "Ofis Uygulamaları");

$kurslar = array(
    "1" => array(
        "baslik" => "Php Kursu",
        "altBaslik" => "Sıfırdan ileri seviye Php ile web geliştirme",
        "resim" => "1.jpg",
        "yayinTarihi" => "01.01.2023",
        "yorumSayisi" => "100",
        "begeniSayisi" => "300",

    ),
    "2" => array(

        "baslik" => "Python Kursu",
        "altBaslik" => "Sıfırdan ileri seviye Python prrogramlama",
        "resim" => "2.jpg",
        "yayinTarihi" => "03.03.2023",
        "yorumSayisi" => "200",
        "begeniSayisi" => "400",
    ),
    "3" => array(

        "baslik" => "Node.js Kursu",
        "altBaslik" => "Sıfırdan ileri seviye Node.js ile web geliştirme",
        "resim" => "3.jpg",
        "yayinTarihi" => "05.05.2023",
        "yorumSayisi" => "300",
        "begeniSayisi" => "500",
    ),

);


$kurs1_altBaslik = ucfirst(strtolower($kurslar["1"]["altBaslik"]));

/* 
ucfirst    (Girilen değerin ilk kelimesinin baş harfini büyük harfe dönüştürür.)

strtolower    (bir metnin veya kelimenin tümünü küçük haflere dönüştürmek için kullanılan fonksiyon)

substr        (Karakter grubu üzerindeki belirlenen bölgeyi almaya yarar.)
 */

$kurs2_altBaslik = ucfirst(strtolower($kurslar["2"]["altBaslik"]));
$kurs3_altBaslik = ucfirst(strtolower($kurslar["3"]["altBaslik"]));

$kurs1_altBaslik = substr($kurs1_altBaslik, 0, 50) . "...";
$kurs2_altBaslik = substr($kurs2_altBaslik, 0, 50) . "...";
$kurs3_altBaslik = substr($kurs3_altBaslik, 0, 50) . "...";

$kurs1_url = str_replace([" ", "ç", "ı", "ş", "ü", "ö", "İ"], ["-", "c", "i", "s", "u", "o", "I"], strtolower($kurslar["1"]["baslik"]));
$kurs2_url = str_replace([" ", "ç", "ı", "ş", "ü", "ö", "İ"], ["-", "c", "i", "s", "u", "o", "I"], strtolower($kurslar["2"]["baslik"]));
$kurs3_url = str_replace([" ", "ç", "ı", "ş", "ü", "ö", "İ", "."], ["-", "c", "i", "s", "u", "o", "I", "-"], strtolower($kurslar["3"]["baslik"]));



?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" />
    <title>Document</title>
</head>

<body>
    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active"><?php echo $kategoriler[0]; ?></a>
                    <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[1]; ?></a>
                    <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[2]; ?></a>
                    <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[3]; ?></a>
                </div>
            </div>
            <div class="col-9">
                <h1 class="mb-3"><?php echo title ?></h1>
                <div class="card mb-3>">
                    <div class="row">
                        <div class="col-4">
                            <img src="img/<?php echo $kurs1_resim; ?>" alt="" class="img-fluid rounded-start">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php echo $kurs1_url; ?>">
                                        <?php echo $kurs1_baslik; ?>
                                    </a>
                                </h5>
                                <p class="card-text"><?php echo $kurs1_altBaslik; ?></p>
                                <P>
                                    <span class="badge rounded-pill text-bg-primary">
                                        Beğeni :<?php echo $kurs1_begeniSayisi; ?>
                                    </span>
                                    <span class="badge rounded-pill text-bg-danger">
                                        Yorum :<?php echo $kurs1_yorumSayisi; ?>
                                    </span>
                                </P>

                            </div>
                        </div>





</body>

</html>