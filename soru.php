<html>
<form action="soru.php" method="post">
    Mat:<input type="text" name="true">
    <input type="text" name="false">
    <input type="submit">
</form>
<style>
img{
    width:100px ;
    height: 100px;
}
</style>
<?php
$dogru=$_POST["true"];
$yanlıs=$_POST["false"];
$toplam=$dogru+$yanlıs;
$net=$dogru-($yanlıs/4);
$cookie_name = "Net_sayisi";
$cookie_value = $net;
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

      echo "$net";
      echo "<br>";

      if($net>35){
        echo "<img src='dogru2.jpg'>";
        echo "<br>" ;
         echo "Geçtin";
         echo "<br>" ;
        
      }
      else{
        echo "Çok çalış";
        
        echo "<img src='yanlıs2.jpg'>";
        
      }
if($toplam>40)
{
    echo "<p style='color:red';>Geçersiz işlem. Toplam doğru ve yanlışlar 40'dan fazla olmamalıdır.</p>";
}

?>
<?php
if(!isset($_COOKIE[$cookie_name])) {
  echo "Daha önce Net Hesaplanmamış";
} else {
  echo "Daha önce girilen net  $cookie_value ";
  
}
?>
</html>