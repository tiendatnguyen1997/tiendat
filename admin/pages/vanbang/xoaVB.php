<?php
$o = new PDO("mysql:host=localhost; dbname=timviec" , "root", "");
$o->query("set names 'utf8' ");
$ma = $_GET['maVB'];
$sql= "delete from vanbang where maVB='$ma' ";
//echo $sql;
$data = $o->query($sql);
header("location: vanbang.php");
?>