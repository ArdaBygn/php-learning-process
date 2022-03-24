<html>
<head>
    <title>Document</title>
</head>
<body>
    <form action="deneme.php" method="post">
    SAYI= <input type="text" name="sayi1">
    SAYI= <input type="text" name="sayi2">
    <input type="submit">
    </form>
    <?php
    
      $sayi1=$_POST['sayi1'];
      $sayi2=$_POST['sayi2'];
      $toplam=$sayi1+$sayi2;
      echo "Toplam: $toplam"; 
    
      echo "fark: $sayi1-$sayi2";
    ?>
    


</body>
</html>