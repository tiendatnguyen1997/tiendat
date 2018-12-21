<?php
$o = new PDO("mysql:host=localhost; dbname=timviec" , "root", "");
$o->query("set names 'utf8' ");
$ma = $_GET['macv'];

$sql= "delete from cv where macv = '$ma' ";
echo $sql;
//exit();
$data = $o->query($sql);
//header("location: CV.php");
?>