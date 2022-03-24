<?php
$telefon=array("Samsung","Iphone","Xiaomi","Oppo","GeneralMobile","LG");
$say=count($telefon);
echo "God tier telefon markaları " . $telefon[0] . ", " . $telefon[1] . " ve " . $telefon[2] .".";
echo"<br>","<br>";


for ($x=0;$x<$say;$x++){
    echo $telefon[$x];
    echo "<br>";
}


?>