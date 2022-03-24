<form action="vki.php" method="post">
    BOY= <input type="text" name="boy">
    KİLO= <input type="text" name="kilo">
    <input type="submit">
    </form>

    <?php
    
      $boy=$_POST["boy"];
      $kilo=$_POST["kilo"];
      $bmi=$kilo/($boy*$boy);
      echo "$bmi";
      if($bmi>0 && $bmi<18){
         echo "zayıfsınız";
      }
      elseif($bmi>19 && $bmi<25){
        echo "İdeal Kilo";
     }
     elseif($bmi>26 && $bmi<35){
        echo "Kilolusunuz";
     }



      
    ?>