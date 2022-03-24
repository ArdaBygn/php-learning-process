<?php
$telefon=array("Samsung","Iphone","Xiaomi","Oppo","GeneralMobile","LG");
$say=count($telefon);
echo "<select>";
for ($x=0;$x<$say;$x++){
echo "<option value='$telefon[$x]'>$telefon[$x]</option>";
}
echo"</select>";
?>