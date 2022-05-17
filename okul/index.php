<?php
// veritabanına bağla 
include "baglan.php";
// sorgu çalıştıralım

$sth = $dbh->prepare('SELECT * FROM `kayip_esyalar`');
$sth->execute();
$kayip_esya_listesi = $sth->fetchAll();




//sonucu yazdıralım
foreach ($kayip_esya_listesi as $satir) {
 echo $satir[0]." - ".$satir[1]." - ".$satir[2]." - ".$satir[3]." -";
 echo "<a href=sil.php?silinecek_kayit=$satir[0]>Sil</a>";
 echo "<img src=images/".$satir[6]."> <br>";
}




echo " <h2>Sadece Kalemler </h2>";

$sth = $dbh->prepare('SELECT * FROM kayip_esyalar WHERE b_esya=?');
$sth->execute(array('kalem'));
$sadece_montlar= $sth->fetchAll();

foreach ($sadece_montlar as $m_satir){
  echo $m_satir[0]." - ".$m_satir[1]." - ".$m_satir[2]." - ".$m_satir[3]." -";
  echo "<img src=images/".$m_satir[6]."> <br>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     img{
         width:50px;
         height:50px;
     }
        </style>
</head>
<body>
    




</body>
</html>