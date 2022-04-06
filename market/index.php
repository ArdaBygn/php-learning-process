
<?php 
include "baglan.php";

//$sql = "SELECT * FROM esya";
//$sorgu = $baglan->prepare($sql);
//$sorgu->execute();

if(isset($_GET['sil'])){
    $sqlsil="DELETE FROM `esya` WHERE `esya`.`urun_id` = ?";
    $sorgusil=$baglan->prepare($sqlsil);
    $sorgusil->execute([
        $_GET["sil"]
    ]);}
    //header("Location:index.php");
    if(isset($_GET['filtre'])){
        $sqlfiltre="SELECT * FROM `esya` WHERE `esya`.`kategori` = ?";
        $sorgu=$baglan->prepare($sqlfiltre);
        $sorgu->execute([
            $_GET["filtre"]
        ]);}
      
else{
    $sql = "SELECT * FROM esya";
$sorgu = $baglan->prepare($sql);
$sorgu->execute();
}
?>









<!DOCTYPE html>
<html lang="en">
<head>
<title>Market Liste</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                        <a href="index.php" class="btn btn-outline-secondary">Tüm Eşyalar</a>
                        <a href="ekle.php" class="btn btn-outline-secondary">Eşya Ekle</a>
                        <a href="?filtre=<?="telefon"?>"  class="btn btn-danger">Telefon</a>
                        <a href="?filtre=<?="bilgisayar"?>"  class="btn btn-info" class="btn btn-danger">Bilgisayar</a>
                        <a href="?filtre=<?="televizyon"?>"  class="btn btn-primary" class="btn btn-success">Televizyon</a>
                        
                    </div>
                </div>
            </div>
        </div>
</header>
<main>
<div class="container">
            <div class="row mt-4">
                <div class="col">
                    <table class="table table-hover table-dark">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Puan</th>
                                <th>Kategori</th>
                                <th>Marka</th>
                                <th>Model</th>
                                <th>Fiyat</th>
                                <th>Resim</th>
                                

                            </tr>
                        </thead>
                        <tbody>
                        <?php while($satir = $sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
                            <tr>
                            <td><?=$satir['urun_id']?></td>
                                <td><?=$satir['adi']?></td>
                                <td><?=$satir['kategori']?></td>
                                <td><?=$satir['marka']?></td>
                                <td><?=$satir['model']?></td>
                                <td><?=$satir['fiyat']?></td>
                                <td><img src="<?=$satir["resim"]?>" width="100px" height="100px"></td>
                                <td>
                                    <div class="btn-group">
                                    <a href="detay.php?urun_id=<?=$satir['urun_id']?>" class="btn btn-success">Detay</a>
                                        <a href="guncelle.php?urun_id=<?=$satir['urun_id']?>" class="btn btn-secondary">Güncelle</a>
                                        <a href="?sil=<?=$satir['urun_id']?>" onclick="return confirm('Silinsin mi?')" class="btn btn-danger">Kaldır</a>
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