<?php
  include "baglan.php";
if(isset($_POST['guncelle']))
{
   
    $sql = "UPDATE `araba`
        SET `Renk` = ?,
            `ModelYili` = ?, 
            `marka` = ?, 
            `Model` = ?,
            `Fiyat` = ?,
            `Fotoraf` = ? WHERE `araba`.`ID` = ?";
    
    $dizi =[
       
        $_POST["Renk"],
        $_POST["ModelYili"],
        $_POST["Marka"],
        $_POST["Model"],
        $_POST["Fiyat"],
        $_POST["Fotoraf"] ,
        $_POST["ID"]
        
    ];
       echo $sql;
    $sorgu = $baglan->prepare($sql);
    $sorgu->execute($dizi);
 
    header("Location:index.php");
 
}
$sql ="SELECT * FROM araba WHERE ID = ?";
$sorgu = $baglan->prepare($sql);
$sorgu->execute([
    $_GET['ID']
]);
$satir = $sorgu->fetch(PDO::FETCH_ASSOC);
?>


<html>
    
    <head>
    <title>Liste</title>
    <style>
    .baslik .bas{
        text-align: center;
        font-size: 50px;
        font-family:Courier;
    }
    .navbar ul li{
        list-style: none;
        display:inline-block;
    }
    .navbar ul li a{
        background:#ff6e00;
        border-radius:2px;
        color:black;
        text-decoration:none;
        padding:6px 13px;
    }
    .navbar ul li a:hover{
        background:blue;
        border-radius:2px;
        color:black;
        text-decoration:none;
        padding:6px 13px;
        transition:0.7s;
    }
    .box{
     width:100px;
     height:100px;
    }
    .savee{
     border-radius:4px;
     width:200px;
     height:30px;
     background-color:blue;
     color:white;
    }
    .savee:hover{
     border-radius:4px;
     width:200px;
     height:30px;
     background-color:red;
     color:white;
     transition:0.7s;
    }

    </style>
    </head>
    
    
    <body>
    <div class="baslik">
        <h1 class="bas">Araba Listesi</h1>
    </div>
    <div class="navbar">
        <ul>
            <li><a href="index.php">Anasayfa</a></li>
            
        </ul>
    </div>
    <div class="container">
        <form action="" method="post" class="bigbox">
        <input type="hidden" class="form-control" name="ID" value="<?=$satir['ID']?>">  
            <div class="box">
                <label for="Marka" class="form-label">Marka</label>
                <input type="text" class="form-control" name="Marka" value="<?=$satir['Marka']?>"> 
            </div>   
            <div class="box">
                <label for="Model" class="form-label">Model</label>
                <input type="text" class="form-control" name="Model" value="<?=$satir['Model']?>"> 
            </div>   
            <div class="box">
                <label for="ModelYili" class="form-label">Model Yılı</label>
                <input type="text" class="form-control" name="ModelYili" value="<?=$satir['ModelYili']?>"> 
            </div>
            <div class="box">
                <label for="Renk" class="form-label">Renk</label>
                <input type="text" class="form-control" name="Renk" value="<?=$satir['Renk']?>"> 
            </div>
            <div class="box">
                <label for="Fiyat" class="form-label">Fiyat</label>
                <input type="text" class="form-control" name="Fiyat" value="<?=$satir['Fiyat']?>"> 
            </div> 
            
            <div class="box">
                <label for="Fotoraf" class="form-label">Fotoğraf</label>
                <input type="text" class="form-control" name="Fotoraf" value="<?=$satir['Fotoraf']?>"> 
            </div>

            <button type="submit" name="guncelle" class="savee">Güncelle</button>
            </form>
    </div>

    </body>
</html>