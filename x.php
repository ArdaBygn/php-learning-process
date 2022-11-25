<?php
$a= 1;
$toplamB= 0;
while ($a <= 500) {
    $toplamB = $toplamB +$a;
    $a ++;
}
echo "1'den 500'e kadar olan sayiların toplami = ".$toplamB."<br>";

$b = 0;
$toplamON = 0;
while ($b <= 10) {
    
    Echo "$b +";
    $toplamON = $toplamON +$b;
    $b++;
}
echo "= $toplamON <br>";

$maas = 5000;
$maasKesinti = $maas*0.05;
if($maas >= 15000){
    Echo "Maaşınız 15 binden fazla olduğu için kesinti yapılacaktır. 
    Aldığınız para miktarı = ". $maas - $maasKesinti;
}
else if($maas < 15000){
    Echo "Maaşınız 15 binden az olduğu için kesinti yapılmayacaktır. 
    Aldığınız para miktarı = ".$maas;
}
echo "<table>";
for($i =0 ; $i<= 5; $i ++){
    Echo "<tr>";
    for ($j=0; $j < 2 ; $j++) { 
        if($i%2==0){
           Echo"<td style='background-color:white;'>Beyaz Satır</td>"; 
        }
        if($i%2==1){
            Echo"<td style='background-color:grey;'>Gri Satır</td>";
        }
    }
    Echo "</tr>";
}
echo "</table><br>";
Echo "1 ile 49 arası rastgele sayı = ". Rand(1,49)."<br>";
for ($a=8; $a<=28 ; $a++) { 
    Echo "<p style='font-size:$a;'>PHP Öğreniyorum. </p><br>";
}
for ($b=1; $b <=1000; $b++) { 
    if($b%5==0){
        $besArray[$b]= "$b";
    }
    else if($b%7==0){
        $yediArray[$b] = "$b";
    }
}
Echo "1000'e  kadar 7'ye tam bölünen sayılar =";
foreach ($yediArray as $Yedi) {
    Echo "$Yedi, ";
}
echo "<br> 1000'e kadar 5'e tam bölünen sayılar =";
foreach($besArray as $Bes){
    Echo "$Bes, ";
}
?>