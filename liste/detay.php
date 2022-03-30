<?php
 
include "baglan.php";
 
$sql ="SELECT * FROM yemek WHERE yemek_id = ?";
$sorgu = $baglan->prepare($sql);
$sorgu->execute([
    $_GET['yemek_id']
]);
$satir = $sorgu->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yemek Listesi</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-1 text-center">Yemek Listesi</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="btn-group">
                        <a href="index.php" class="btn btn-outline-primary">Tüm Yemekler</a>
                        <a href="ekle.php" class="btn btn-outline-primary">Öğün Ekle</a>
                    </div>
                </div>
            </div>
        </div>
    <main>
    <div class="container">
        <div class="row">
            <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                     YEMEK DETAYLARI <br> Yemek ID= <?=$satir["yemek_id"]?> 
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">Sabah Yemeği=<?=$satir["sabah"]?> <br>Ara Yemek=<?=$satir["arayemek"]?> <br>Öğle Yemeği=<?=$satir["ogle"]?><br> Ara Yemek 2= <?=$satir["arayemek2"]?> <br>Akşam Yemeği=<?=$satir["aksam"]?></h6>
                    
 
                </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>