<?php
 
if(isset($_POST["kaydet"]))
{
    include "baglan.php";
    $sql = "INSERT INTO `yemek` (`yemek_id`, `sabah`, `arayemek`, `ogle`, `arayemek2`, `aksam`) VALUES (?, ?, ?, ?, ?,?);";
    $dizi =[
        $_POST["yemekid"],
        $_POST["sabah"],
        $_POST["arayemek"],
        $_POST["ogle"],
        $_POST["arayemek2"],
        $_POST["aksam"]
        
    ];
 
    $sth = $baglan->prepare($sql);
   $sonuc = $sth->execute($dizi);
   header("Location:index.php");
}
 
?>


<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yemek Listesi</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
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
    
    </header>
    <main>
    <div class="container">
        <form action="" method="post" class="row mt-4 g-3">
        <div class="col-6">
                <label for="yemekid" class="form-label">Yemek ID veriniz</label>
                <input type="text" class="form-control" name="yemekid">
            </div>
            <div class="col-6">
                <label for="sabah" class="form-label">Sabah Yemek istediğiniz</label>
                <input type="text" class="form-control" name="sabah">
            </div>
            <div class="col-6">
                <label for="arayemek" class="form-label">Ara öğün yemek istediğiniz</label>
                <input type="text" class="form-control" name="arayemek">
            </div>
            <div class="col-6">
                <label for="ogle" class="form-label">Öğlen Yemek istediğiniz</label>
                <input type="text" class="form-control" name="ogle">
            </div>  
            <div class="col-6">
                <label for="arayemek2" class="form-label">Ara öğün 2 yemek istediğiniz</label>
                <input type="text" class="form-control" name="arayemek2">
            </div>
            <div class="col-6">
                <label for="aksam" class="form-label">Akşam yemek istediğiniz</label>
                <input type="text" class="form-control" name="aksam">
            </div>                          
            
            <button type="submit" name="kaydet" class="btn btn-primary">Kaydet</button>
        </form>
    </div>
    </main>
    <footer></footer>
</body>
</html>