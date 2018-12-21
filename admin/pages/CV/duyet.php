<?php
$o = new PDO("mysql:host=localhost; dbname=timviec" , "root", "");
$o->query("set names 'utf8' ");
$ma = $_GET["macv"];
$sql= " update cv set trangthai = 1 where macv='$ma' ";

$data = $o->query($sql);
header("location: CV.php");
?>