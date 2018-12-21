<?php
$o = new PDO("mysql:host=localhost; dbname=timviec" , "root", "");
$o->query("set names 'utf8' ");
$ma = $_GET['maCC'];
$sql= "delete from chungchi where maCC='$ma' ";
//echo $sql;
$data = $o->query($sql);
header("location: chungchi.php");
?>