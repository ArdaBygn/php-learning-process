<?php
  include "baglan.php";
if(isset($_POST['guncelle']))
{
   
    $sql = "UPDATE `esya`
        SET `adi` = ?,
            `kategori` = ?, 
            `marka` = ?, 
            `model` = ?,
            `fiyat` = ?,
            `resim` = ? WHERE `esya`.`urun_id` = ?";
    
    $dizi =[
       
        $_POST["adi"],
        $_POST["kategori"],
        $_POST["marka"],
        $_POST["model"],
        $_POST["fiyat"],
        $_POST["resim"] ,
        $_POST["urun_id"]
        
    ];
       echo $sql;
    $sorgu = $baglan->prepare($sql);
    $sorgu->execute($dizi);
 
    header("Location:index.php");
 
}
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
<title>Market Liste</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta value="viewport" content="width=device-width, initial-scale=1.0">
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
                        
                    </div>
                </div>
            </div>
        </div>
</header>
<main>
<div class="container">
        <form action="" method="post" class="row mt-4 g-3">
        
                
                <input type="hidden" class="form-control" name="urun_id" value="<?=$satir['urun_id']?>">
              
            <div class="col-6">
                <label for="marka" class="form-label">Marka</label>
                <input type="text" class="form-control" name="marka" value="<?=$satir['marka']?>">
            </div>   
            <div class="col-6">
                <label for="model" class="form-label">Model</label>
                <input type="text" class="form-control" name="model" value="<?=$satir['model']?>">
            </div>   
            <div class="col-6">
                <label for="fiyat" class="form-label">Fiyat</label>
                <input type="text" class="form-control" name="fiyat" value="<?=$satir['fiyat']?>">
            </div> 
            <div class="col-6">
                <label for="adi" class="form-label">Puan</label>
                <input type="text" class="form-control" name="adi" value="<?=$satir['adi']?>">
            </div>
            <div class="col-6">
                <label for="resim" class="form-label">Resim</label>
                <input type="text" class="form-control" name="resim" value="<?=$satir['resim']?>">
            </div>
            
       
            <label for="kategori">Kategori Seç</label>
            <select class="form-select" aria-label="Default select example"name="kategori" value="<?=$satir['kategori']?>" 
            class="form-control">
            
            <option value="telefon">telefon</option>
            <option value="televizyon">televizyon</option>
            <option value="bilgisayar">bilgisayar</option>
                        </select>
   

            <button type="submit" name="guncelle" class="btn btn-primary">Güncelle</button>
            </form>
    </div>
  




</main>
</body>
</html>