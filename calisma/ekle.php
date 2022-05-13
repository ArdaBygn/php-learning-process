<?php
 
if(isset($_POST["kaydet"]))
{
    include "baglan.php";
    $sql = "INSERT INTO `araba` (`ID`, `Marka`, `Model`, `ModelYili`, `Renk`, `Fiyat`,`Fotoraf`) VALUES (?, ?, ?, ?, ?,?,?);";
    $dizi =[
        $_POST["ID"],
        $_POST["Marka"],
        $_POST["Model"],
        $_POST["ModelYili"],
        $_POST["Renk"],
        $_POST["Fiyat"],
        $_POST["Fotoraf"]
        
    ];
 
    $sth = $baglan->prepare($sql);
   $sonuc = $sth->execute($dizi);
   header("Location:index.php");
}
 
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
        <div class="box">
                <label for="ID" class="form-label">ID</label>
                <input type="text" class="form-control" name="ID">
            </div>   
            <div class="box">
                <label for="Marka" class="form-label">Marka</label>
                <input type="text" class="form-control" name="Marka">
            </div>   
            <div class="box">
                <label for="Model" class="form-label">Model</label>
                <input type="text" class="form-control" name="Model">
            </div>   
            <div class="box">
                <label for="ModelYili" class="form-label">Model Yılı</label>
                <input type="text" class="form-control" name="ModelYili">
            </div>
            <div class="box">
                <label for="Renk" class="form-label">Renk</label>
                <input type="text" class="form-control" name="Renk">
            </div>
            <div class="box">
                <label for="Fiyat" class="form-label">Fiyat</label>
                <input type="text" class="form-control" name="Fiyat">
            </div> 
            
            <div class="box">
                <label for="Fotoraf" class="form-label">Fotoğraf</label>
                <input type="text" class="form-control" name="Fotoraf">
            </div>

            <button type="submit" name="kaydet" class="savee">Kaydet</button>
            </form>
    </div>
</body>
</html>