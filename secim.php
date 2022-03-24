<?php

if(!empty($_POST["sec"])){
    $secim=$_POST["sec"];
    $cookie_name="sec";
    $cookie_value=$secim;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 1), "/"); // 86400 = 1 gün
}
?>

<?php
if(!isset($_COOKIE['sec'])){
    echo "Cookie boş";$secim="";
}else{$secim=$_COOKIE["sec"];}
echo "Oy verdiğin parti=".$secim;

?>


<form action="" method="post">
    <input type="hidden" value="chp" name="sec">
    <img src="img/chp.png" witdh="100px" height="100px">
    <button type="submit">Oy ver!</button>
</form>

<form action="" method="post">
    <input type="hidden" value="mhp" name="sec">
    <img src="img/mhp.png" witdh="100px" height="100px">
    <button type="submit">Oy ver!</button>
</form>

<form action="" method="post">
    <input type="hidden" value="deva" name="sec">
    <img src="img/deva.jpg" witdh="100px" height="100px">
    <button type="submit">Oy ver!</button>
</form>

<form action="" method="post">
    <input type="hidden" value="iyi" name="sec">
    <img src="img/iyi.png" witdh="100px" height="100px">
    <button type="submit">Oy ver!</button>
</form>

<form action="" method="post">
    <input type="hidden" value="akp" name="sec">
    <img src="img/akp.jpg" witdh="100px" height="100px">
    <button type="submit">Oy ver!</button>
</form>