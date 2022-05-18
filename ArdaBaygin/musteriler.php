<?php
include "myphpbagla.php";

if(isset($_GET['sil'])){
    $sqlsil="DELETE FROM `musteriler` WHERE `musteriler`.`musteri_id` = ?";
    $sorgusil=$baglan->prepare($sqlsil);
    $sorgusil->execute([
        $_GET['sil']
    ]);
 
    header('Location:musteriler.php');
 
}


$sql ="SELECT * FROM `musteriler`";
$sorgu = $baglan->prepare($sql);
$sorgu->execute();


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>
  <div class="container">
      <div class="row">
        <div class="col">
        <h1 class="display-1 text-center">Müşteriler</h1>
        </div> 
      </div> 
    </div> 
    <div class="container">
      <div class="row">
        <div class="col">
        <a href="index.php" class="btn btn-outline-secondary">Anasayfa</a>
        <a href="musteri_ekle.php" class="btn btn-outline-secondary">Müşteri Ekle</a>
        </div> 
      </div> 
    </div> 



    <div class="container">
      <div class="row">
        <div class="col"> 

  <?php while($satir = $sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
    <div class="card" style="width: 18rem;">
  <img src="images/<?=$satir['musteri_resim']?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?=$satir['musteri_isim']?></h5>
    <p class="card-text"><?=$satir['musteri_aciklama']?></p>
    <a href="?sil=<?=$satir['musteri_id']?>" class="btn btn-danger">Kaldır</a>
  </div>

  <?php } ?>

        </div> 
      </div> 
    </div> 
  










</body>
</html>