<?php
 
include "baglan.php";
 
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
    img{
    height:100px;
    width:200px;
    }
    .dene0{
        font-size:30px;
    }
    .dene1{
        font-size:20px;
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
    <h5 class="dene0">
    EŞYA DETAYLARI <br> EŞYA ID= <?=$satir["ID"]?> 
    </h5>
    <h6 class="dene1">Marka=<?=$satir["Marka"]?> <br>Model=<?=$satir["Model"]?> <br>Model Yılı=<?=$satir["ModelYili"]?><br> Renk= <?=$satir["Renk"]?> <br>Fiyat=<?=$satir["Fiyat"]?><br> Fotoğraf=<img src="img/<?=$satir["Fotoraf"]?>"></h6>
    </body>
</html>