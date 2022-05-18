<?php


include "myphpbagla.php";

if(isset($_GET['sil'])){
    $sqlsil="DELETE FROM `emlaklar` WHERE `emlaklar`.`emlak_id` = ?";
    $sorgusil=$baglan->prepare($sqlsil);
    $sorgusil->execute([
        $_GET['sil']
    ]);
 
    header('Location:kullanici.php');
 
}

if(isset($_GET['filtre'])){
    $sqlfiltre="SELECT * FROM `emlaklar` WHERE `emlaklar`.`emlak_tur` = ?";
    $sorgu=$baglan->prepare($sqlfiltre);
    $sorgu->execute([
        $_GET["filtre"]
    ]);}

$sql ="SELECT * FROM emlaklar";
$sorgu = $baglan->prepare($sql);
$sorgu->execute();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emlaklar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
    img{
        width:100px;
        height:100px;
    }

    
</style>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col"><h1 class="display-1 text-center">Emlak Listesi</h1></div>
        </div>
    </div>
    <div class="container">
        <div class="row mt-3">
            <div class="col">
            <a href="index.php" class="btn btn-outline-secondary">Anasayfa</a>
            <a href="form_ekle.php" class="btn btn-primary">Ekle</a>
            <a href="musteriler.php" class="btn btn-success">Müşteriler</a>
            <a href="?filtre=<?="Kiralık"?>" class="btn btn-warning">Sadece Kiralık İlanlara Bak</a>
            <a href="?filtre=<?="Satılık"?>" class="btn btn-warning">Sadece Satılık İlanlara Bak</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
            <table class="table table-success table-striped">
            <thead>
                <tr>
                <th>ID</th>
                <th>Emlak İsmi</th>
                <th>Satılık/Kiralık</th>
                <th>Oda Sayısı</th>
                <th>Resim</th>
                <th>Fiyat</th>
                </tr>
            </thead>
            <?php while($satir = $sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                <td><?=$satir['emlak_id']?></td>
                <td><?=$satir['emlak_ad']?></td>
                <td><?=$satir['emlak_tur']?></td>
                <td><?=$satir['oda_sayisi']?></td>
                <td><img src="images/<?=$satir['emlak_resim']?>"></td>
                <td><?=$satir['emlak_fiyat']?></td>
                <td>
                <div class="btn-group">
                     <a href="?sil=<?=$satir['emlak_id']?>" class="btn btn-danger">Kaldır</a>
                </div>
                </td>
                </tr>
                <?php } ?>
            </table>
            </div>
        </div>
    </div>






</body>
</html>