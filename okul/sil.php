<?php
include "baglan.php";

$silinecek_kayit=$_GET["silinecek_kayit"];


$silsql="DELETE FROM `kayip_esyalar` WHERE `kayip_esyalar`.`id`=?";

$sth = $dbh->prepare($silsql);
$sth->execute(array($silinecek_kayit));


header('Location:index.php');
?>

