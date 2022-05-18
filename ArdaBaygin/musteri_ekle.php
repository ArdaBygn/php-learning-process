<?php

if(isset($_POST["kaydet"]))
{
    include "myphpbagla.php";
    $sql = "INSERT INTO `musteriler` (`musteri_id`, `musteri_isim`, `musteri_resim`, `musteri_aciklama`) VALUES (?, ?, ?, ?);";
    $dizi =[
        $_POST["musteri_id"],
        $_POST["musteri_isim"],
        $_POST["musteri_resim"],
        $_POST["musteri_aciklama"]
        
        
    ];
 
    $sth = $baglan->prepare($sql);
   $sonuc = $sth->execute($dizi);
   header("Location:musteriler.php");
}
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
        <h1 class="display-1 text-center">Müşteri Bilgileriniz</h1>
        </div> 
      </div> 
    </div> 
    <div class="container">
      <div class="row">
        <div class="col">
        <a href="index.php" class="btn btn-outline-secondary">Anasayfa</a>
        </div> 
      </div> 
    </div> 
    <div class="container">
        <form action="" method="post" class="row mt-4 g-3">
        <div class="col-6">
                <label for="musteri_id" class="form-label">ID veriniz</label>
                <input type="text" class="form-control" name="musteri_id">
            </div>
            <div class="col-6">
                <label for="musteri_isim" class="form-label">İsminiz</label>
                <input type="text" class="form-control" name="musteri_isim">
            </div>
            <div class="col-6">
                <label for="musteri_aciklama" class="form-label">Açıklamanız</label>
                <input type="text" class="form-control" name="musteri_aciklama">
            </div>
            <div class="col-6">
                <label for="musteri_resim" class="form-label">Resminiz</label>
                <input type="text" class="form-control" name="musteri_resim">
            </div>                         
            
            <button type="submit" name="kaydet" class="btn btn-primary">Kaydet</button>
        </form>
    </div>