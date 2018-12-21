<?php
$o = new PDO("mysql:host=localhost; dbname=timviec" , "root", "");
$o->query("set names 'utf8' ");
$ma = $_GET['maTV'];
$sql= "delete from thanhvien where maTV='$ma' ";
//echo $sql;
$data = $o->query($sql);
header("location: thanhvien.php");
?>