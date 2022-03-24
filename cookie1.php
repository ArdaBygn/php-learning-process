



<form action="" method="post">
KG FIYATI:<input type="text" name="fiyat">
KG MIKTARI:<input type="text" name="miktar">
<input type="submit" value="Gönder">
</form>



<?php
$fiyat=$_POST['fiyat'];
$miktar=$_POST['miktar'];
$top=$fiyat*$miktar;
$cookie_name =$top;
$cookie_value = " fiyat";
//echo "$top TL toplam Fiyat";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "bir önceki alışveriş '" . $cookie_name . "' TL yapılmamiş";
} else {
  echo "bir önceki alışverişde '" . $cookie_name . "' Tl yapılmıs <br>";
  
}
?>

</body>
</html>
