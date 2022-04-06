
<?php
 
include "baglan.php";
 
$sql ="SELECT * FROM esya WHERE urun_id = ?";
$sorgu = $baglan->prepare($sql);
$sorgu->execute([
    $_GET['urun_id']
]);
$satir = $sorgu->fetch(PDO::FETCH_ASSOC);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Market Liste</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="display-1 text-center">Market</h1>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="btn-group">
                        <a href="index.php" class="btn btn-outline-primary">Tüm Eşyalar</a>
                        <a href="ekle.php" class="btn btn-outline-primary">Eşya Ekle</a>
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
                     EŞYA DETAYLARI <br> EŞYA ID= <?=$satir["urun_id"]?> 
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">PUAN=<?=$satir["adi"]?> <br>MARKA=<?=$satir["marka"]?> <br>MODEL=<?=$satir["model"]?><br> FIYAT= <?=$satir["fiyat"]?> <br>RESIM=<?=$satir["resim"]?></h6>
                    
 
                </div>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>
