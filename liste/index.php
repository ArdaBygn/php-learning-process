<?php
 
include "baglan.php";
 
if(isset($_GET['sil'])){
    $sqlsil="DELETE FROM `yemek` WHERE `yemek`.`yemek_id` = ?";
    $sorgusil=$baglan->prepare($sqlsil);
    $sorgusil->execute([
        $_GET['sil']
    ]);
 
    header('Location:index.php');
 
}
 
$sql ="SELECT * FROM yemek";
$sorgu = $baglan->prepare($sql);
$sorgu->execute();
 
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
            <div class="row mt-4">
                <div class="col">
                    <table class="table table-hover table-dark table-striped">
                        <thead>
                            <tr>
                                <th>Sabah</th>
                                <th>Ara Öğün</th>
                                <th>Öğlen</th>
                                <th>Ara Öğün 2</th>
                                <th>Akşam</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php while($satir = $sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr>
                                <td><?=$satir['sabah']?></td>
                                <td><?=$satir['arayemek']?></td>
                                <td><?=$satir['ogle']?></td>
                                <td><?=$satir['arayemek2']?></td>
                                <td><?=$satir['aksam']?></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="detay.php?yemek_id=<?=$satir['yemek_id']?>" class="btn btn-success">Detay</a>
                                        <a href="guncelle.php?yemek_id=<?=$satir['yemek_id']?>" class="btn btn-secondary">Güncelle</a>
                                        <a href="?sil=<?=$satir['yemek_id']?>" onclick="return confirm('Silinsin mi?')" class="btn btn-danger">Kaldır</a>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
      
     </main> 
      




</body>
</html>