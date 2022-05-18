<?php

if(isset($_POST["kaydet"]))
{
    include "myphpbagla.php";
    $sql = "INSERT INTO `emlaklar` (`emlak_id`, `emlak_ad`, `emlak_tur`, `oda_sayisi`, `emlak_resim`, `emlak_fiyat`) VALUES (?, ?, ?, ?, ?,?);";
    $dizi =[
        $_POST["emlak_id"],
        $_POST["emlak_ad"],
        $_POST["emlak_tur"],
        $_POST["oda_sayisi"],
        $_POST["emlak_resim"],
        $_POST["emlak_fiyat"]
        
        
    ];
 
    $sth = $baglan->prepare($sql);
   $sonuc = $sth->execute($dizi);
   header("Location:index.php");
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
        <h1 class="display-1 text-center">Emlak Ekle</h1>
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
                <label for="emlak_id" class="form-label">ID veriniz</label>
                <input type="text" class="form-control" name="emlak_id">
            </div>
            <div class="col-6">
                <label for="emlak_ad" class="form-label">Emlak İsmi</label>
                <input type="text" class="form-control" name="emlak_ad">
            </div>
            <div class="col-6">
                <label for="emlak_tur" name="emlak_tur" class="form-label">Seçiniz</label>
            <select class="form-select"  name="emlak_tur" aria-label="Default select example" value="emlak_tur">
            <option type="text" name="emlak_tur" value="Kiralık">Kiralık</option>
            <option  type="text" name="emlak_tur" value="Satılık">Satılık</option>
            </select>
            </div>
            <div class="col-6">
                <label for="oda_sayisi" class="form-label">Oda Sayısı</label>
                <input type="text" class="form-control" name="oda_sayisi">
            </div>  
            <div class="col-6">
                <label for="emlak_resim" class="form-label">Resim</label>
                <input type="text" class="form-control" name="emlak_resim">
            </div>
            <div class="col-6">
                <label for="emlak_fiyat" class="form-label">Fiyatı Giriniz</label>
                <input type="text" class="form-control" name="emlak_fiyat">
            </div>                          
            
            <button type="submit" name="kaydet" class="btn btn-primary">Kaydet</button>
        </form>
    </div>