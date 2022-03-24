<?php
$bu_ben=array("Ad"=>"Arda","Soyad"=>"Baygın","Sınıf"=>"11-E","No"=>"990");
print_r($bu_ben);
foreach($bu_ben as $key=>$value){
echo "<br>".$value;
}

asort($bu_ben);//sayilari artan olarak 1-100
echo "<br>";
print_r($bu_ben);
echo "<br>";
arsort($bu_ben);//sayilari azalan olarak 100-1
echo "<br>";
print_r($bu_ben);
echo "<br>";
echo "<br>";
ksort($bu_ben);//keyleri artan olarak  A-Z'ye
echo "<br>";
print_r($bu_ben);
echo "<br>";
krsort($bu_ben);//keyleri artan olarak  Z-A'ye
echo "<br>";
print_r($bu_ben);





?>