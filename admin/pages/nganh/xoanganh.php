<?php
$o = new PDO("mysql:host=localhost; dbname=timviec" , "root", "");
$o->query("set names 'utf8' ");
$ma = $_GET['manganh'];
$sql= "delete from nganh where manganh='$ma' ";
//echo $sql;
$data = $o->query($sql);
header("location: nganh.php");
?>