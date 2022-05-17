<?php
//veritabanı bağla
include "baglan.php";


//formdan gelen bilgileri okumak
 $b_esya=htmlspecialchars($_POST['b_esya']); 
 $b_adsoyad=htmlspecialchars($_POST['b_adsoyad']);
 $b_yer=htmlspecialchars($_POST['b_yer']);  
 $b_tarihi=htmlspecialchars($_POST['b_tarihi']); 
 $b_durumu=htmlspecialchars($_POST['b_durumu']); 
 $b_esya_resmi=uniqid().htmlspecialchars($_FILES["b_esya_resmi"]["name"]); 
//sql oluştur
$kayit_sql= "INSERT INTO `kayip_esyalar` (`id`, `b_esya`, `b_adsoyad`, `b_yer`, `b_tarihi`, `b_durumu`, `b_esya_resmi`) VALUES (NULL, ?, ?, ?, ?, ?, ?)";


//çalıştır
$sth = $dbh->prepare($kayit_sql);
$sth->execute(array($b_esya,$b_adsoyad,$b_yer,$b_tarihi,$b_durumu,$b_esya_resmi));
//dosya yüklemesi
$tmp_name=htmlspecialchars($_FILES["b_esya_resmi"]["tmp_name"]); 
move_uploaded_file($tmp_name, "./images/$b_esya_resmi");
	

header('Location:index.php');



?>