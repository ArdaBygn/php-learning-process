<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post" enctype="multipart/form-data">
Ad:<input type="text" name="isim"><br>
Şifre:<input type="text" name="sifre"><br>
Kadın:<input type="radio" name="cins" value="Kadın">
Erkek:<input type="radio" name="cins" value="Erkek"><br>
Programlama Dilleri: <br>
C#<input type="checkbox" name="diller[]" value="C#"><br>
JAVA<input type="checkbox" name="diller[]" value="Java"><br>
HTML<input type="checkbox" name="diller[]" value="Html"><br>
PYTHON<input type="checkbox" name="diller[]" value="Python"><br>
DOSYA:<input type="file" name="dosya"><br>
Görüş:<textarea name="gorus" cols="30" rows="3"></textarea>
<input type="submit" name="kayit" value="Gönder">
</form>


<?php


if(isset($_POST["kayit"])){

echo "ADINIZ: ".$_POST["isim"]."<br>";
echo "ŞİFRENİZ: ".$_POST["sifre"]."<br>";
echo "CİNSİYETİN: ".$_POST["cins"]."<br>";
echo "GÖRÜŞÜNÜZ: ".$_POST["gorus"]."<br>";

if(isset($_FILES)){
echo $_FILES["dosya"]["name"] ." ";
echo $_FILES["dosya"]["size"] ." ";
echo $_FILES["dosya"]["type"] ." ";
move_uploaded_file($_FILES["dosya"]["tmp_name"],$_FILES["dosya"]["name"]);
}
echo "<br>";


echo "DİLLER :";
foreach($_POST["diller"] as $dil){
    echo $dil." ";
}
echo "<br>";
}







?>
</body>
</html>