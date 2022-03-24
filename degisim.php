<form action="deneme2.php" method="post">
    YAZIYI GİRİNİZ=<input type="text" name="yazi"><br>
    YAZI BOYUTU SEC= <select name="boyut">
    <option value="10">10</option>
    <option value="12">12</option>
    <option value="15">15</option>
    <option value="25">25</option>
</select>


    YAZI RENGI=<input type="color" name="renk"><br>
    <input type="checkbox" name="kalin">KALIN<br>
    <input type="checkbox" name="ita">İTALİK<br>
    <input type="submit"><br>
    
    </form>
    <?php 
    if($_POST){
        $yazi=$_POST["yazi"];
        $boyut=$_POST["boyut"];
        $renk=$_POST["renk"];
        if(isset($_POST["kalin"])){
            $bold="bold";
        }
        else{
            $bold="normal";
        }
        if(isset($_POST["ita"])){
            $italic="italic";
        }
        else{
            $italic="normal";
        }
        echo "<p style='font-size:".$boyut."px;color:$renk;font-weight:$bold;font-style:$italic;'>$yazi</p>";
    }


    

    ?>