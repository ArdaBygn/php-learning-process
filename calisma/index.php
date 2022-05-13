<?php
include "baglan.php";

if(isset($_GET['sil'])){
    $sqlsil="DELETE FROM `araba` WHERE `araba`.`ID` = ?";
    $sorgusil=$baglan->prepare($sqlsil);
    $sorgusil->execute([
        $_GET["sil"]
    ]);}

    if(isset($_GET['filtre'])){
        $sqlfiltre="SELECT * FROM `araba` WHERE `araba`.`Marka` = ?";
        $sorgu=$baglan->prepare($sqlfiltre);
        $sorgu->execute([
            $_GET["filtre"]
        ]);}
 else{   
$sql ="SELECT * FROM araba";
$sorgu = $baglan->prepare($sql);
$sorgu->execute();
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
table,td,th{
    border:1px solid black;
}
img{
    height:100px;
    width:200px;
}
a{
    background:green;
    border-radius:2px;
    color:black;
    text-decoration:none;
    padding:6px 13px;  
}
a:hover{
    background:yellow;
    border-radius:2px;
    color:black;
    text-decoration:none;
    padding:6px 13px;  
    transition:0.7s;
}
.s{
    background:pink;
    border-radius:2px;
    color:black;
    text-decoration:none;
    padding:6px 13px;
}
.s:hover{
    background:purple;
    border-radius:2px;
    color:black;
    text-decoration:none;
    padding:6px 13px;  
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
        <li><a href="ekle.php">Ekle</a></li>
        <a href="?filtre=<?="Audi"?>"  class="s">Audi</a>
        <a href="?filtre=<?="BMW"?>"   class="s">BMW</a>
        <a href="?filtre=<?="Dacia"?>"  class="s">Dacia</a>
    </ul>
</div>
<table style="width:100%">
<tr>
    <th>ID</th>
    <th>Marka</th>
    <th>Model</th>
    <th>Model Yılı</th>
    <th>Renk</th>
    <th>Fiyat</th>
    <th>Fotoğraf</th>
</tr>
<?php while($satir = $sorgu->fetch(PDO::FETCH_ASSOC)) { ?>
<tr>
    <td><?=$satir['ID']?></td>
    <td><?=$satir['Marka']?></td>
    <td><?=$satir['Model']?></td>
    <td><?=$satir['ModelYili']?></td>
    <td><?=$satir['Renk']?></td>
    <td><?=$satir['Fiyat']?></td>
    <th><img src="img/<?=$satir["Fotoraf"]?>"></th>
    <th>
    
    <a href="detay.php?ID=<?=$satir['ID']?>" >Detay</a>
    <a href="guncelle.php?ID=<?=$satir['ID']?>" >Güncelle</a>
    <a href="?sil=<?=$satir['ID']?>" onclick="return confirm('Silinsin mi?')">Kaldır</a>
    
    </th>
</tr>
<?php } ?>
</table>






</body>
</html>