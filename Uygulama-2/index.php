<?php


$kurs1_baslik = "Php Kursu";
$kurs1_altBaslik = "Sıfırdan ileri seviye Php ile web geliştirme";
$kurs1_resim = "1.jpg";
$kurs1_yayinTarihi = "01.01.2023";
$kurs1_yorumSayisi = "100";
$kurs1_begeniSayisi = "300";


$kurs2_baslik = "Python Kursu";
$kurs2_altBaslik = "Sıfırdan ileri seviye Python prrogramlama";
$kurs2_resim = "2.jpg";
$kurs2_yayinTarihi = "03.03.2023";
$kurs2_yorumSayisi = "200";
$kurs2_begeniSayisi = "400";


$kurs3_baslik = "Node.js Kursu";
$kurs3_altBaslik = "Sıfırdan ileri seviye Node.js ile web geliştirme";
$kurs3_resim = "3.jpg";
$kurs3_yayinTarihi = "05.05.2023";
$kurs3_yorumSayisi = "300";
$kurs3_begeniSayisi = "500";

$kurs1_altBaslik = ucfirst(strtolower($kurs1_altBaslik));
$kurs2_altBaslik = ucfirst(strtolower($kurs2_altBaslik));
$kurs3_altBaslik = ucfirst(strtolower($kurs3_altBaslik));



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
        <div class="card mb-3>">
            <div class="row">
                <div class="col-3">
                    <img src="img/<?php echo $kurs1_resim; ?>" alt="" class="img-fluid rounded-start">
                </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $kurs1_baslik; ?></h5>
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
            </div>
        </div>
        <div class="card mb-3>">
            <div class="row">
                <div class="col-3">
                    <img src="img/<?php echo $kurs2_resim; ?>" alt="" class="img-fluid rounded-start">
                </div>

                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $kurs2_baslik; ?></h5>
                        <p class="card-text"><?php echo $kurs2_altBaslik; ?></p>
                        <P>
                            <span class="badge rounded-pill text-bg-primary">
                                Beğeni :<?php echo $kurs2_begeniSayisi; ?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum :<?php echo $kurs2_yorumSayisi; ?>
                            </span>
                        </P>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3>">
            <div class="row">
                <div class="col-3">
                    <img src="img/<?php echo $kurs3_resim; ?>" alt="" class="img-fluid rounded-start">
                </div>

                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $kurs3_baslik; ?></h5>
                        <p class="card-text"><?php echo $kurs3_altBaslik; ?></p>
                        <P>
                            <span class="badge rounded-pill text-bg-primary">
                                Beğeni :<?php echo $kurs3_begeniSayisi; ?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum :<?php echo $kurs3_yorumSayisi; ?>
                            </span>
                        </P>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>