<?php
$o = new PDO("mysql:host=localhost; dbname=timviec" , "root", "");
$o->query("set names 'utf8' ");
$ma = $_GET['macty'];
$sql= "delete from chungchi where macty='$ma' ";
//echo $sql;
$data = $o->query($sql);
header("location: congty.php");
?>