<?php
 
if(isset($_POST["kaydet"]))
{
    include "baglan.php";
    $sql = "INSERT INTO `esya` (`urun_id`, `adi`, `kategori`, `marka`, `model`, `fiyat`,`resim`) VALUES (?, ?, ?, ?, ?,?,?);";
    $dizi =[
        $_POST["urun_id"],
        $_POST["adi"],
        $_POST["kategori"],
        $_POST["marka"],
        $_POST["model"],
        $_POST["fiyat"],
        $_POST["resim"]
        
    ];
 
    $sth = $baglan->prepare($sql);
   $sonuc = $sth->execute($dizi);
   header("Location:index.php");
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
                        
                    </div>
                </div>
            </div>
        </div>
</header>
<main>
<div class="container">
        <form action="" method="post" class="row mt-4 g-3">
        <div class="col-6">
                <label for="urun_id" class="form-label">ID</label>
                <input type="text" class="form-control" name="urun_id">
            </div>   
            <div class="col-6">
                <label for="marka" class="form-label">Marka</label>
                <input type="text" class="form-control" name="marka">
            </div>   
            <div class="col-6">
                <label for="model" class="form-label">Model</label>
                <input type="text" class="form-control" name="model">
            </div>   
            <div class="col-6">
                <label for="fiyat" class="form-label">Fiyat</label>
                <input type="text" class="form-control" name="fiyat">
            </div> 
            <div class="col-6">
                <label for="adi" class="form-label">Puan</label>
                <input type="text" class="form-control" name="adi">
            </div>
            <div class="col-6">
                <label for="resim" class="form-label">Resim</label>
                <input type="text" class="form-control" name="resim">
            </div>
            
       
            <label for="kategori">Kategori Seç</label>
            <select class="form-select" aria-label="Default select example" name="kategori" id="kategori"
            class="form-control">
            
            <option value="telefon">telefon</option>
            <option value="televizyon">televizyon</option>
            <option value="bilgisayar">bilgisayar</option>
                        </select>
   

            <button type="submit" name="kaydet" class="btn btn-primary">Kaydet</button>
            </form>
    </div>
  




</main>
</body>
</html>